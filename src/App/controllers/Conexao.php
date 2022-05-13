<?php

namespace App\Controllers;

require_once '.env.php';

class Conexao{

     private static $instance;

     public static function getInstance(){
         if (self::$instance ==null){
             //$dns = driver:host=hostname;dbname=databasename
             $dns = DRIVER. ':host=' .HOST.';dbname=' .DBNAME;
             self::$instance = new \PDO($dns, USER,
                    PASSWORD);
             self::$instance->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
         }
         return self::$instance;
     }

     private function __construct(){
     }
}