<?php

namespace App;

class Router
{

    public $routes = [];

    public function get($path, $callback)
    {
        $this->routes[] = ['uri'=>$path,'method' => 'get', 'callback' => $callback];
    }


    public function run() {

        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes as $route) {

            if($route['uri'] == $uri && $route['method'] == strtolower($method) ) {

                $response = $route['callback']();
                //var_dump($response);

                if($response instanceof View) {

                    $response->render();

                } else {
                    echo $response;
                }

                return;
            }

        }

        echo '404';

        die();

    }

}
