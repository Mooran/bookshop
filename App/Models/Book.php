<?php 

namespace App\Models;

use App\Services\Mysql;

class Book
{
    public static function getByCatid($catid)
    {
        $db = Mysql::get_connection();
        $db -> query('select * from books where catid ='.$catid);
        $data = $db -> fetch();
        return $data;
    }

    public static function getDetails($isbn){
        $db = Mysql::get_connection();
        $db -> query('select * from books where isbn ='.$isbn);
        $data = $db -> fetch();
        return $data[0];
    }
}