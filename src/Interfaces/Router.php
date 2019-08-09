<?php

namespace Md\Router\Interfaces;

interface Router {


    public function start() : void;

    public function add(Route $route) : void;
}
