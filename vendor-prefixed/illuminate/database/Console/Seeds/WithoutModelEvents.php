<?php

namespace MyVendorPrefix\Illuminate\Database\Console\Seeds;

use MyVendorPrefix\Illuminate\Database\Eloquent\Model;
trait WithoutModelEvents
{
    /**
     * Prevent model events from being dispatched by the given callback.
     *
     * @param  callable  $callback
     * @return callable
     */
    public function withoutModelEvents(callable $callback)
    {
        return fn() => Model::withoutEvents($callback);
    }
}
