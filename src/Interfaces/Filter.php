<?php

namespace Md\Router\Interfaces;

interface Filter
{

    public function match(array $data) : bool;

}
