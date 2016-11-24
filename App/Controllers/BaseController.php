<?php 

namespace App\Controllers;

/**
* baseController
*/
class BaseController
{
    
    function __construct()
    {
        session_start();
    }

    function __destruct()
    {
        
    }
}