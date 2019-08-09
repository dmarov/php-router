<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Error\Error;

use Md\Router\Router;

class RouterTest extends TestCase
{
    /**
     * @test
     */
    public function canBeInstantiated(): void
    {

        $router = new Router("/api/messages?offset=0&limit=10");

    }

    /**
     * @test
     */
    public function canBeStarted(): void
    {

        $router = new Router("/api/messages?offset=0&limit=10");
        $router->start();

    }

}
