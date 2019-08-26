<?php

namespace Md\Router\Interfaces;

interface Router
{

    public function start() : void;

    public function add(array $filters, callable ...$actions) : void;

    public function mount(string $base) : void;

}
