<?php 

require_once("../vendor/autoload.php");


$url_arr = explode('.php',$_SERVER["PHP_SELF"]);
$Route_param = explode('/',$url_arr[1]);

if (empty($Route_param[1])){
    unset($Route_param[1]);
}

$controller_name    = ucfirst(isset($Route_param[1])?$Route_param[1]:'index');
$action_name        = ucfirst(isset($Route_param[2])?$Route_param[2]:'index');

$final_controller_name = "App\\Controllers\\".$controller_name."Controller";

$controller =  new $final_controller_name();

$controller->$action_name();
