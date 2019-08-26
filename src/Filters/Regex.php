<?php

declare(strict_types=1);

namespace Md\Router\Filters;

use Md\Router\Interfaces;

class Regex implements Interfaces\Filter
{
    private $method;
    private $regex;

    public function __construct(array $data)
    {

    }

    public function match($data)
    {

    }
}
