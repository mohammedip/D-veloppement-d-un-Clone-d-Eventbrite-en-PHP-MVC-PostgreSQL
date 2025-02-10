<?php
namespace App\Core;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    protected $baseUrl = '/Eventbrite-Clone/public/';

    private function addRoute($route, $controller, $action, $method){
        $this->routes[$method][$route] = [
            'controller' => $controller, 
            'action' => $action
        ];  
    }

    public function get($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "GET");
    }

    public function post($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "POST");
    }

    public function dispatch()
    {
        // Normalize the URI by removing base URL
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = str_replace($this->baseUrl, '/', $uri);
        $uri = $uri ?: '/';

        $method = $_SERVER['REQUEST_METHOD'];

        $matchedRoute = null;
        $params = [];

        // First, try exact match
        if (isset($this->routes[$method][$uri])) {
            $matchedRoute = $this->routes[$method][$uri];
        } else {
            // Try pattern matching
            foreach ($this->routes[$method] as $route => $routeInfo) {
                $pattern = preg_replace('/\{([^}]+)\}/', '(?P<$1>[^/]+)', $route);
                $pattern = str_replace('/', '\/', $pattern);
                
                if (preg_match("/^$pattern$/", $uri, $matches)) {
                    $matchedRoute = $routeInfo;
                    $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                    break;
                }
            }
        }

        if ($matchedRoute) {
            $controller = new $matchedRoute['controller']();
            $action = $matchedRoute['action'];

            if (empty($params)) {
                $controller->$action();
            } else {
                call_user_func_array([$controller, $action], array_values($params));
            }
        } else {
            // If no route matches, redirect to 404
            header("HTTP/1.0 404 Not Found");
            $controller = new \App\Controllers\PageController();
            $controller->notFound();
        }
    }

    // Optional: Debug method to help troubleshoot routing
    public function debugRoutes()
    {
        echo "Current URI: " . $_SERVER['REQUEST_URI'] . "<br>";
        echo "Normalized URI: " . str_replace($this->baseUrl, '/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) . "<br>";
        echo "Registered Routes:<br>";
        print_r($this->routes['GET']);
    }
}