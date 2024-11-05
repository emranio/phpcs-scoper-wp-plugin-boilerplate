<?php

/**
 * Copyright (c) 2024 Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */
namespace MyVendorPrefix\Dbout\WpOrm\Api;

use MyVendorPrefix\Dbout\WpOrm\MetaMappingConfig;
/**
 * @since 3.0.0
 */
interface WithMetaModelInterface
{
    /**
     * @return MetaMappingConfig
     */
    public function getMetaConfigMapping(): MetaMappingConfig;
}
