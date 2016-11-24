<?php 

namespace App\Models;

use App\Services\Mysql;

class Category
{
    public static function getAll(){
        $db = Mysql::get_connection();
        $db -> query('select catid, catname from categories');
        $data = $db -> fetch();
        return $data;
    }
}