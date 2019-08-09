<?php

namespace Md\Router\Interfaces;

interface Route {

    public function __construct(String $method, String $urlTemplate, callable $action);

    public function call() : void;
}
