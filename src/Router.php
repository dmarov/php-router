<?php

declare(strict_types=1);

namespace Md\Router;

class Router
{

    private $params;
    private $route;

    public function __construct($params = [])
    {

        $this->params = $params;

    }

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
