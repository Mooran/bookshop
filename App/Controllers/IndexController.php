<?php 

namespace App\Controllers;

use App\Models\Category;

class IndexController extends BaseController
{
    public function index(){
        $categories = Category::getAll();
        
        /* View */
        require ("../App/Views/index.php");
    }
}