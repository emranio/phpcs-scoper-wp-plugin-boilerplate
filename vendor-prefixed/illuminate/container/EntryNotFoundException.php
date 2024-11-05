<?php

namespace MyVendorPrefix\Illuminate\Container;

use Exception;
use MyVendorPrefix\Psr\Container\NotFoundExceptionInterface;
class EntryNotFoundException extends Exception implements NotFoundExceptionInterface
{
    //
}
