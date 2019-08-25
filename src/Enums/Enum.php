<?php

namespace Md\Router\Enums;

class Enum
{

    public final static function has($name) : bool
    {

        $reflection = new \ReflectionClass(get_called_class());
        return $reflection->hasConstant($name);
    }
}
