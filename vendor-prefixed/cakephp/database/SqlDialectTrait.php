<?php

declare (strict_types=1);
namespace MyVendorPrefix;

use function MyVendorPrefix\Cake\Core\deprecationWarning;
deprecationWarning('Since 4.1.0: Cake\Database\SqlDialectTrait is deprecated. ' . 'Use Cake\Database\Driver\SqlDialectTrait instead.');
\class_exists('MyVendorPrefix\Cake\Database\Driver\SqlDialectTrait');
