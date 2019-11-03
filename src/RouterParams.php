<?php

declare(strict_types=1);

namespace Md\Router;

use Md\Router\Exceptions\InvalidArgument as InvalidArgumentException;

class RouterParams
{

    private $method;
    private $path;

    public function __construct($method, $path)
    {

        $this->method = $method;
        $this->path = $path;
    }

    public function __get($propertyName) {

        if (property_exists($this, $propertyName))
            return $this->$propertyName;

        throw new InvalidArgumentException("can't access non existing property ${propertyName}");
    }
}
