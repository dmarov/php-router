<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Error\Error;

use Md\Router\RouterParams;

class RouterParamsTest extends TestCase
{
    /**
     * @test
     */
    public function canBeInstantiated() : void
    {

        $method = "GET";
        $path = "/api";
        $routerParams = new RouterParams($path, $path);

        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function canAccessPath() : void
    {

        $method = "GET";
        $path = "/api";
        $routerParams = new RouterParams($path, $path);
        $routerParams->path;

        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function canAccessMethod() : void
    {

        $method = "GET";
        $path = "/api";
        $routerParams = new RouterParams($path, $path);
        $routerParams->method;

        $this->assertTrue(true);
    }
}
