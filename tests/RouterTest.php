<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Error\Error;

use Md\Router\Router;
use Md\Router\Route;

class RouterTest extends TestCase
{
    /**
     * @test
     */
    public function canBeInstantiated() : void
    {

        $router = new Router("/api");

    }

    /**
     * @test
     */
    public function canBeStarted() : void
    {

        $router = new Router("/api");
        $router->start();

    }

    /**
     * @test
     */
    public function performsSimpleTemplateAction() : void
    {

        $router = new Router("GET", "/api");

        $var = false;

        $action = function ()
        {
            global $var;
            $var = true;
        };

        $router->add(new Route("GET", "/api", $action));

        $router->start();

        $this->assertEquals($var, true);

    }
}
