<?php

declare (strict_types=1);
namespace MyVendorPrefix;

use function MyVendorPrefix\Cake\Core\deprecationWarning;
deprecationWarning('Since 4.2.0: Cake\Datasource\Paginator is deprecated.' . 'Use Cake\Datasource\Paging\NumericPaginator instead.');
\class_exists('MyVendorPrefix\Cake\Datasource\Paging\NumericPaginator');
