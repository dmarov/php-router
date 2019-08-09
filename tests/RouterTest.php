<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use Md\Router\Router;

class RouterTest
{
    public function routerCanBeInstantiated(): void
    {
        $this->expectException(\Exception::class);
        new Router("/api/messages?offset=0&limit=10");
    
    }


}
