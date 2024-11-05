<?php

namespace MyVendorPrefix\Illuminate\Contracts\Container;

use Exception;
use MyVendorPrefix\Psr\Container\ContainerExceptionInterface;
class CircularDependencyException extends Exception implements ContainerExceptionInterface
{
    //
}
