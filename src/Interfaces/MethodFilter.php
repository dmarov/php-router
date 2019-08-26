<?php

namespace Md\Router\Interfaces;

interface MethodFilter extends Filter
{

    public function match($data) : bool;

}
