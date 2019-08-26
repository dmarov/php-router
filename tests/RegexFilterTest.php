<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Error\Error;

use Md\Router\Filters\Regex;
use Md\Router\Exceptions;

class RouteTest extends TestCase
{
    /**
     * @test
     */
    public function canBeInstantiated() : void
    {

        $route = new Route("GET", "/api/messages/{id}/info", function () : void {});

    }

    /**
     * @test
     */
    public function doesntAcceptInvalidMethodName() : void
    {

        $this->expectException(Exceptions\InvalidMethod::class);
        $route = new Route("UNKNOWN", "/api", function () : void {});

    }

}
