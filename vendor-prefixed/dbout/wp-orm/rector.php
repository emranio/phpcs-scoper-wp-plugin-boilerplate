<?php

namespace MyVendorPrefix;

/**
 * Copyright (c) 2024 Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */
use MyVendorPrefix\Rector\Config\RectorConfig;
use MyVendorPrefix\Rector\Set\ValueObject\SetList;
use MyVendorPrefix\Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictConstructorRector;
return RectorConfig::configure()->withPaths([__DIR__ . '/src', __DIR__ . '/tests'])->withRules([TypedPropertyFromStrictConstructorRector::class])->withPreparedSets(codeQuality: \true)->withSets([SetList::PHP_81]);
