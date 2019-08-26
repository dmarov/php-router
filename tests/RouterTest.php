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

        $router = new Router([
            'method' => 'GET',
            'path' => "/api/messages/123"
        ]);

        $this->assertTrue(true);

    }

    /**
     * @test
     */
    public function canBeStarted() : void
    {

        $router = new Router([
            'method' => 'GET',
            'path' => "/api/messages/123?expand=users,alike"
        ]);

        $router->start();

    }

    public function performsSimpleTemplateAction() : void
    {

        $router = new Router([
            'method' => "GET", 
            'path' => "/api"
        ]);

        $path = new Path\Templated('/api/messages/{id}', 'api:message');
        $method = new Method\Regex("^(?:GET|POST)$");
        $method = new Method\OneOf('GET', 'POST');
        $method = new Method\Str('GET');
        /* $filter = new Filter("^(?:GET|POST)$", $path); */

        $actionVerify = function (Context $ctx) {
            echo "jwt verified";
            $ctx->next();
            $ctx->nextRoute();
        };

        $route = new Route($filter, $actionVerify);

        $router->add($route);
        $router->add([ $method, $path ], $actionVerify);

        $router->start();

        /* $this->assertEquals($var, true); */

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
            $ctx->next();
        };

        $route = new Route($filter, [ $actionVerify, $actionProcess ]);

        $router->add($route);

        $router->start();

        $this->assertEquals($var, true);

    }

    /**
     * @test
     */
    public function moduleExample() : void
    {

        /* class Module extends Routable { */

        /*     protected $router; */

        /*     function __construct() { */
        /*         $this->router = new Router; */

        /*         $filter = new Filters\Temlate([ */
        /*             'method' => 'GET', */
        /*             'template' => '/messages', */
        /*         ]); */

        /*         $route = new Route($filter, [$this, 'auth'], [$this, 'getMessages']); */
        /*         $router->add($route); */



            
        /*     } */

        /*     function getRouter() { */
            
        /*     } */

        /*     function auth() { */
            
        /*     } */
        
        /*     function getMessages() { */
            
        /*     } */
        /* } */

        /* $router->mount('/module', new Module); */

    }
}
