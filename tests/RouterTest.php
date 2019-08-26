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
            'path' => "/api/messages/123"
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
        $method = new Method\AnyOf('GET', 'POST');
        $method = new Method\Simple('GET');

        $actionVerify = function (Context $ctx) {
            echo "jwt verified";
            $ctx->next();
        };

        $actionSomeOther = function (Context $ctx) {
            echo "jwt verified";
            $ctx->next();
        };

        $router->add([ $method, $path ],
            $actionVerify,
            $actionSomeOther
        );

        $router->start();

    }

    /**
     * @test
     */
    public function canBeMounted() : void
    {

        class Module extends Routable
        {

            protected $router;

            function __construct()
            {

                $this->router = new Router;
                $get = new Method\AnyOf('GET');
                $post = new Method\AnyOf('POST');
                $delete = new Method\AnyOf('DELETE');

                $messages = new Path\Simple("/messages", 'api:messages');
                $message = new Path\Templated("/messages/{id}". 'api:message');
                $all = new Path\RegEx("/\/.*/");

                $this->router->add([ $all ], [ $this, 'initUser' ]);

                $this->router->add([ $get, $messages ],
                    [ $this, 'getMessages' ]
                );

                $this->router->add([ $post, $messages ],
                    [ $this, 'verifyUser' ],
                    [ $this, 'appendMessage' ]
                );

                $this->router->add([ $delete, $message ],
                    [ $this, 'verifyUser' ],
                    [ $this, 'deleteMessage' ]
                );
            }

            function verifyUser(Context $ctx)
            {

                $isVerified = true;

                if ($isVerified)
                    $ctx->next();
                else $ctx->nextRoute();
            }
        
            function getMessages(Context $ctx)
            {
            
            }

            function appendMessage(Context $ctx)
            {
            
            }

            function deleteMessage(Context $ctx)
            {
            
            }
        }

        $router = new Router([]);
        $base = new Path\Simple("/api/feedback");
        $router->extend($base, new Module);

    }

}
