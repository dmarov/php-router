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

    public function performsSimpleTemplateAction1() : void
    {

        $router = new Router("GET", "/api");

        $filter = new TemplateFilter([
            'method' => "^(GET|POST)$",
            'template' => '/api/messages/{id}',
        ]);

        $actionVerify = function (Context $ctx) {
            echo "jwt verified";
            $ctx->next();
        };

        $route = new Route($filter, $actionVerify);

        $router->add($route);

        $router->start();

        $this->assertEquals($var, true);

    }

    /**
     * @test
     */
    public function performsSimpleTemplateAction2() : void
    {

        $router = new Router("GET", "/api");

        $filter = new TemplateFilter([
            'method' => "^(GET|POST)$",
            'template' => '/api/messages/{id}',
        ]);

        $actionVerify = function (Context $ctx) {
            echo "jwt verified";
            $ctx->next();
        };

        $actionProcess = function (Context $ctx) {
            echo "Hello World";
            $ctx->nextRoute();
        };

        $route = new Route($filter, [ $actionVerify, $actionProcess ]);

        $router->add($route);

        $router->start();

        $this->assertEquals($var, true);

    }
}
