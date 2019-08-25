<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Error\Error;

use Md\Router\Route;
use Md\Router\Exceptions;

class FilterTest extends TestCase
{
    /**
     * @test
     */
    public function canBeInstantiated() : void
    {

        $filter = new Filter([
            "method" => "^(GET|POST)$",
            "template" => "/api/messages/{id}(\d+)"
        ]);

        $filter = new Filter([
            "method" => "GET",
            "regexp" => "\/api\/messages\/(\d+)",
        ]);
    }

}
