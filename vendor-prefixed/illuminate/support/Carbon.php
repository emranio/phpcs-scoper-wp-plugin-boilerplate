<?php

namespace MyVendorPrefix\Illuminate\Support;

use MyVendorPrefix\Carbon\Carbon as BaseCarbon;
use MyVendorPrefix\Carbon\CarbonImmutable as BaseCarbonImmutable;
use MyVendorPrefix\Illuminate\Support\Traits\Conditionable;
use MyVendorPrefix\Ramsey\Uuid\Uuid;
use MyVendorPrefix\Symfony\Component\Uid\Ulid;
class Carbon extends BaseCarbon
{
    use Conditionable;
    /**
     * {@inheritdoc}
     */
    public static function setTestNow($testNow = null)
    {
        BaseCarbon::setTestNow($testNow);
        BaseCarbonImmutable::setTestNow($testNow);
    }
    /**
     * Create a Carbon instance from a given ordered UUID or ULID.
     *
     * @param  \Ramsey\Uuid\Uuid|\Symfony\Component\Uid\Ulid|string  $id
     * @return \Illuminate\Support\Carbon
     */
    public static function createFromId($id)
    {
        if (is_string($id)) {
            $id = Ulid::isValid($id) ? Ulid::fromString($id) : Uuid::fromString($id);
        }
        return static::createFromInterface($id->getDateTime());
    }
    /**
     * Dump the instance and end the script.
     *
     * @param  mixed  ...$args
     * @return never
     */
    public function dd(...$args)
    {
        dd($this, ...$args);
    }
    /**
     * Dump the instance.
     *
     * @return $this
     */
    public function dump()
    {
        dump($this);
        return $this;
    }
}
