<?php

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DBNAME','rubrica');

class DB{

    // protected static $host = 'localhost';
    // protected static $user = 'root';
    // protected static $pass = '';
    // protected static $dbName = 'rubrica';
    protected static $db;

    public static function getConnect(){
        return self:: $db = new \mysqli(HOST, USER, PASS,DBNAME);;
    }
}

// DB::getConnect()
?>