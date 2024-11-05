<?php

declare (strict_types=1);
namespace MyVendorPrefix;

use function MyVendorPrefix\Cake\Core\deprecationWarning;
deprecationWarning('Since 4.0.0: Cake\Database\Type is deprecated. Use Cake\Database\TypeFactory instead.');
\class_exists('MyVendorPrefix\Cake\Database\TypeFactory');
