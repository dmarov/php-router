<?php

namespace Md\Router\Interfaces;

interface Filter
{

    public function match($data) : bool;

}
