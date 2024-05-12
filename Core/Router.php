<?php

namespace Core;

use Exception;

class Router 
{
    protected $routes = [];

    public function add($uri, $params, $request_method, $middleware = null)
    {
        $this->routes[] = [
            'uri' => $uri,
            'params' => $params,
            'request_method' => $request_method,
            'middleware' => $middleware
        ];

        return $this;
    }

    public function get($uri, $params)
    {
        return $this->add($uri, $params, 'GET');
    }

    public function post($uri, $params)
    {
        return $this->add($uri, $params, 'POST');
    }

    public function put($uri, $params)
    {
        return $this->add($uri, $params, 'PUT');
    }

    public function patch($uri, $params)
    {
        return $this->add($uri, $params, 'PATCH');
    }

    public function delete($uri, $params)
    {
        return $this->add($uri, $params, 'DELETE');
    }

    public function route($uri, $request_method)
    {
        foreach($this->routes as $route){
            if($route['uri'] === $uri && $route['request_method'] === strtoupper($request_method)){

                // list($controller_class, $method) = explode('@', $route['params'], 2);
                [$controller_class, $method] = $route['params'];

                $controller_class = $controller_class;
                $controller = new $controller_class();

                if(!method_exists($controller, $method)){
                    throw new Exception("Method $method does not exit in $controller_class class");
                }

                return $controller->$method();
            }
        }

        echo "no route found";
        die(); // TODO::change abort function
    }
}
