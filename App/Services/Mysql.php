<?php 

namespace App\Services;

class Mysql
{
    protected $db;
    protected static $mysql_connection;
    protected $last_query_result;
    private function __construct()
    {
        $db_config = Config::get('db');
        $this->db = new \mysqli(
          $db_config['hostaddr'],
          $db_config['username'], 
          $db_config['password'], 
          $db_config['database']);
        if (!$this->db) {
           return false;
        }
        $this->db->query('set names utf8');
        $this->db->autocommit(TRUE);
        return $this->db;
    }

    static public function get_connection(){
        if (empty(self::$mysql_connection)){
            self::$mysql_connection = new Mysql();
        }
        return self::$mysql_connection;
    }

    public function query($sql)
    {
        return $this->last_query_result = $this->db->query($sql);
    }

    public function fetch()
    {
       $res_array = [];
       $count = 0;
       while ($row = $this->last_query_result->fetch_assoc())
       {
            $res_array[$count++] = $row;
       }
       return $res_array;
    }
}