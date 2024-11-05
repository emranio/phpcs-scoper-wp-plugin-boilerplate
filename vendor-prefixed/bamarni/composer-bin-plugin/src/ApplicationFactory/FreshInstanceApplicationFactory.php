<?php

declare (strict_types=1);
namespace MyVendorPrefix\Bamarni\Composer\Bin\ApplicationFactory;

use MyVendorPrefix\Composer\Console\Application;
final class FreshInstanceApplicationFactory implements NamespaceApplicationFactory
{
    public function create(Application $existingApplication): Application
    {
        return new Application();
    }
}
