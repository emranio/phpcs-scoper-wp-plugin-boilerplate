<?php

/**
 * Copyright (c) 2024 Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */
namespace MyVendorPrefix\Dbout\WpOrm\Orm\Query\Processors;

use MyVendorPrefix\Dbout\WpOrm\Orm\Database;
use MyVendorPrefix\Illuminate\Database\Query\Builder;
use MyVendorPrefix\Illuminate\Database\Query\Processors\Processor;
class WordPressProcessor extends Processor
{
    /**
     * @inheritDoc
     */
    public function processInsertGetId(Builder $query, $sql, $values, $sequence = null): ?int
    {
        /** @var Database $co */
        $co = $query->getConnection();
        $co->insert($sql, $values);
        $id = $co->lastInsertId();
        return is_numeric($id) ? (int) $id : $id;
    }
}
