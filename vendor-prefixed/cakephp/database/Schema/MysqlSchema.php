<?php

declare (strict_types=1);
namespace MyVendorPrefix;

use function MyVendorPrefix\Cake\Core\deprecationWarning;
deprecationWarning('Since 4.1.0: Cake\Database\Schema\MysqlSchema is deprecated. ' . 'Use Cake\Database\Schema\MysqlSchemaDialect instead.');
\class_exists('MyVendorPrefix\Cake\Database\Schema\MysqlSchemaDialect');
