<?php

namespace Md\Router\Interfaces;

interface Route
{

    public function __construct(Filter $filter, callable $action);

    public function call() : void;
}
