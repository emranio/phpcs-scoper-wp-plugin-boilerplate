<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */
namespace MyVendorPrefix\Phinx\Console;

use MyVendorPrefix\Phinx\Console\Command\Breakpoint;
use MyVendorPrefix\Phinx\Console\Command\Create;
use MyVendorPrefix\Phinx\Console\Command\Init;
use MyVendorPrefix\Phinx\Console\Command\ListAliases;
use MyVendorPrefix\Phinx\Console\Command\Migrate;
use MyVendorPrefix\Phinx\Console\Command\Rollback;
use MyVendorPrefix\Phinx\Console\Command\SeedCreate;
use MyVendorPrefix\Phinx\Console\Command\SeedRun;
use MyVendorPrefix\Phinx\Console\Command\Status;
use MyVendorPrefix\Phinx\Console\Command\Test;
use MyVendorPrefix\Symfony\Component\Console\Application;
use MyVendorPrefix\Symfony\Component\Console\Input\InputInterface;
use MyVendorPrefix\Symfony\Component\Console\Output\OutputInterface;
/**
 * Phinx console application.
 *
 * @author Rob Morgan <robbym@gmail.com>
 */
class PhinxApplication extends Application
{
    /**
     * Initialize the Phinx console application.
     */
    public function __construct()
    {
        parent::__construct('Phinx by CakePHP - https://phinx.org.');
        $this->addCommands([new Init(), new Create(), new Migrate(), new Rollback(), new Status(), new Breakpoint(), new Test(), new SeedCreate(), new SeedRun(), new ListAliases()]);
    }
    /**
     * Runs the current application.
     *
     * @param \Symfony\Component\Console\Input\InputInterface $input An Input instance
     * @param \Symfony\Component\Console\Output\OutputInterface $output An Output instance
     * @return int 0 if everything went fine, or an error code
     */
    public function doRun(InputInterface $input, OutputInterface $output)
    {
        // always show the version information except when the user invokes the help
        // command as that already does it
        if ($input->hasParameterOption('--no-info') === \false) {
            if ($input->hasParameterOption(['--help', '-h']) !== \false || $input->getFirstArgument() !== null && $input->getFirstArgument() !== 'list') {
                $output->writeln($this->getLongVersion());
                $output->writeln('');
            }
        }
        return parent::doRun($input, $output);
    }
}
