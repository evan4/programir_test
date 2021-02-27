<?php

namespace Mycms;

class Router
{
    private $routes = [];
    private $method;
    private $uri;

    public function __construct(){
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->uri = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
    }

    public function add($url, $path, $method = 'get'){
        $action = explode('@', $path);
        $method = strtoupper($method);
        if (!array_key_exists($method, $this->routes)) {
            $this->routes[$method] = [];
        }
        array_push($this->routes[$method], [$url => $action]);
    }

    public function notFound(){
        http_response_code(404);
        echo  json_encode([
            'error' => 'resource does not exits'
        ]);
        die();
    }

    public function dispatch(){
       
        foreach ($this->routes[$this->method] as $value) {
            $url = array_keys($value);
            $data = $value[$url[0]];

            if( $url[0] === $this->uri ){

                $controller = 'App\Controllers\\'.$data[0];
                $instance = new $controller();
                $method = $data[1];
                 
                return $instance->$method();
            }
        }

        $this->notFound();
    }

}
