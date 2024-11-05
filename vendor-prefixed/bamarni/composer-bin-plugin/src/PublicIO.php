<?php

declare (strict_types=1);
namespace MyVendorPrefix\Bamarni\Composer\Bin;

use MyVendorPrefix\Composer\IO\ConsoleIO;
use MyVendorPrefix\Symfony\Component\Console\Input\InputInterface;
use MyVendorPrefix\Symfony\Component\Console\Output\OutputInterface;
final class PublicIO extends ConsoleIO
{
    public static function fromConsoleIO(ConsoleIO $io): self
    {
        return new self($io->input, $io->output, $io->helperSet);
    }
    public function getInput(): InputInterface
    {
        return $this->input;
    }
    public function getOutput(): OutputInterface
    {
        return $this->output;
    }
}
