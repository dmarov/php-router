<?php

namespace Md\Router\Interfaces;

interface MethodFilter extends Filter
{

    public function match(string $data) : bool;

}
