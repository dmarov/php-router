<?php

namespace Md\Router\Interfaces;

interface PathFilter extends Filter
{

    public function match($data) : bool;

}
