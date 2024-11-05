<?php

/**
 * Copyright (c) 2024 Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */
namespace MyVendorPrefix\Dbout\WpOrm\Scopes;

use MyVendorPrefix\Dbout\WpOrm\Api\CustomModelTypeInterface;
use MyVendorPrefix\Dbout\WpOrm\Exceptions\WpOrmException;
use MyVendorPrefix\Illuminate\Database\Eloquent\Builder;
use MyVendorPrefix\Illuminate\Database\Eloquent\Model;
use MyVendorPrefix\Illuminate\Database\Eloquent\Scope;
/**
 * @since 3.0.0
 */
class CustomModelTypeScope implements Scope
{
    /**
     * @inheritDoc
     * @throws WpOrmException
     */
    public function apply(Builder $builder, Model $model): void
    {
        if (!$model instanceof CustomModelTypeInterface) {
            throw new WpOrmException(sprintf('The object %s must be implement %s.', get_class($model), CustomModelTypeInterface::class));
        }
        $builder->where($model->getCustomTypeColumn(), $model->getCustomTypeCode());
    }
}
