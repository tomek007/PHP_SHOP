<?php

namespace App;

class View
{

public $viewName;

public function __construct($viewName)
{

$this->viewName = $viewName;

}

public function render()
{
//        if( file_exists('Views/' . $this->viewName . '.php') ) {

    require_once('../Views/' . $this->viewName . '.php');

//        } else {
//
//            throw new Exception('View doesnt exist');
//
//        }


}

}