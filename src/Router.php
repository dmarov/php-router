<?php

declare(strict_types=1);

namespace Md\Router;

class Router implements Interfaces\Router
{

    private $route;

    public function add(Interfaces\Route $route) : void
    {
    
        $this->route = $route;
    }

    public function start() : void
    {

        if ($this->route !== null)
            $this->route->call();
    }
}
