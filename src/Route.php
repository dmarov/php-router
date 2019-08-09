<?php

declare(strict_types=1);

namespace Md\Router;

class Route implements Interfaces\Route
{
    private $method;
    private $urlTemplate;
    private $action;

    public function __construct(String $method, String $urlTemplate, callable $action)
    {
        $methods = new Enums\Method;
        if (!$methods->has($method))
            throw new Exceptions\InvalidMethod;

        $this->method = $method;
        $this->urlTemplate = $urlTemplate;
        $this->action = $action;

    }

    public function call() : void {

        call_user_func($this->action);
    }
}
