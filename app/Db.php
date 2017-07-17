<?php

namespace App;

use PDO;

class Db
{
    protected static $instance;

    public function __construct()
    {

        self::$instance = new PDO('mysql:dbhost=localhost;dbname=shop', 'root', 'root');

    }

    public static function getInstance()
    {
        return self::$instance;
    }

}

//Db::getInstance()->query('SELECT * FROM users');
//User::all();