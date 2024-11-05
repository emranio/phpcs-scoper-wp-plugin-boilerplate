<?php

/**
 * Copyright (c) 2024 Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */
namespace MyVendorPrefix\Dbout\WpOrm\Taps\Comment;

use MyVendorPrefix\Dbout\WpOrm\Builders\CommentBuilder;
use MyVendorPrefix\Dbout\WpOrm\Models\Comment;
/**
 * @since 3.0.0
 */
class IsApprovedTap
{
    /**
     * @param bool $isApproved
     */
    public function __construct(protected readonly bool $isApproved = \true)
    {
    }
    /**
     * @param CommentBuilder $builder
     * @return void
     */
    public function __invoke(CommentBuilder $builder): void
    {
        $builder->where(Comment::APPROVED, $this->isApproved);
    }
}