<?php

declare (strict_types=1);
namespace MyVendorPrefix;

use function MyVendorPrefix\Cake\Core\deprecationWarning;
deprecationWarning('Since 4.1.0: `Comparison` deprecated. Use `ComparisonExpression` instead.');
\class_exists('MyVendorPrefix\Cake\Database\Expression\ComparisonExpression');
