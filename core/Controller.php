<?php

namespace App\Core;

use BadFunctionCallException;

abstract class Controller{
    public function __call($name, $arguments)
    {
        throw new BadFunctionCallException(sprintf(
            'Method "%s" is not implemented in class "%s".',
            $name,
            get_class(($this))
        ));
    }
}