<?php 

namespace App\Services;

class Config
{
    protected static $configs;

    static public function set($key,$value)
    {
        return self::$configs[$key] = $value;
    }

    static public function get($key)
    {
        if (!isset(self::$configs[$key])){
            $config = require('../config.php');
            self::$configs[$key] = $config[$key];
        }
        return self::$configs[$key];
    }
}