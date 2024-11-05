<?php

declare (strict_types=1);
namespace MyVendorPrefix\Bamarni\Composer\Bin;

use MyVendorPrefix\Bamarni\Composer\Bin\Command\BinCommand;
use MyVendorPrefix\Composer\Plugin\Capability\CommandProvider as CommandProviderCapability;
/**
 * @final Will be final in 2.x.
 */
class CommandProvider implements CommandProviderCapability
{
    public function getCommands(): array
    {
        return [new BinCommand()];
    }
}
