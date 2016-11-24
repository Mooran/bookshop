<?php 

namespace App\Controllers;

use App\Models\Book;
use App\Services\Mysql;

/**
* 注意：这里灰常不规范，仅为实现缓存购物车功能 */
class CartController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
    * 添加 */
    public function add()
    {

        $new = \filter_input(\INPUT_GET,  'isbn');
        if (!empty($new)){
            //new item selected
            if(!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
                $_SESSION['items'] = 0;
                $_SESSION['total_price'] ='0.00';
            }
            if(isset($_SESSION['cart'][$new])) {
                $_SESSION['cart'][$new]++;
            } else {
                $_SESSION['cart'][$new] = 1;
            }
            $_SESSION['total_price'] = $this->getPrice();
            $_SESSION['items'] = $this->getItems();
        }
        echo "添加成功<script>setTimeout(function(){history.go(-1);},1000);</script>";
    }

    /**
    * 显示 */
    public function show()
    {
        $cart = $_SESSION['cart'] ?? [];
        $CartDetails = [];
        foreach ($cart as $isbn => $quantity){
            $bookdetials = Book::getDetails($isbn);
            $CartDetails[$isbn] = $bookdetials;
            $CartDetails[$isbn]['quantity'] = $quantity;
            $CartDetails[$isbn]['total'] = $bookdetials['price'] * $quantity;
        }

        //View::display("cart/show",[$CartDetails]);

        /* View */
        require ("../App/Views/cart/show.php");
    }
    /**
    * 清空 */
    public function clear()
    {
        $_SESSION['cart'] = Null;
        $_SESSION['items'] = 0;
        $_SESSION['total_price'] = 0.00;
    }

    protected function getPrice(){
        $cart = $_SESSION['cart'];
        $price = 0.0;
        if(is_array($cart)) {
            $db = Mysql::get_connection();
            foreach($cart as $isbn => $qty) {
                $query = "select price from books where isbn='".$isbn."'";
                $result = $db->query($query);
                if ($result) {
                    $item = $result->fetch_object();
                    $item_price = $item->price;
                    $price +=$item_price*$qty;
                }
            }
        }
        return $price;
    }

    protected function getItems(){
        $cart = $_SESSION['cart'];
        $items = 0;
        if(is_array($cart)){
            foreach($cart as $qty) {
              $items += $qty;
            }
        }
        return $items;
    }

}