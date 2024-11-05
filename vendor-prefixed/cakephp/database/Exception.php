<?php

declare (strict_types=1);
namespace MyVendorPrefix;

use function MyVendorPrefix\Cake\Core\deprecationWarning;
deprecationWarning('Since 4.2.0: Cake\Database\Exception is deprecated. ' . 'Use Cake\Database\Exception\DatabaseException instead.');
\class_exists('MyVendorPrefix\Cake\Database\Exception\DatabaseException');
