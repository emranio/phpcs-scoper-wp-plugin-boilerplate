<?php

namespace MyVendorPrefix\Carbon\Doctrine;

use MyVendorPrefix\Carbon\Carbon;
use MyVendorPrefix\Doctrine\DBAL\Types\VarDateTimeType;
class DateTimeType extends VarDateTimeType implements CarbonDoctrineType
{
    /** @use CarbonTypeConverter<Carbon> */
    use CarbonTypeConverter;
}
