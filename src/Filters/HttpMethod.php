<?php

declare(strict_types=1);

namespace Md\Router\Filters;

use Md\Router\Interfaces;

class HttpMethod implements Interfaces\Filter
{
    private $methodExpr;

    public function __construct($methodExpr)
    {

    }

    public function match($data)
    {

    }
}
