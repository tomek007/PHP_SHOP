<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once ('../vendor/autoload.php');

new \App\Db();

require_once ('../routes.php');

