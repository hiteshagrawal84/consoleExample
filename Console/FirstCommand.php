<?php
namespace Mageacademy\ConsoleExample\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class FirstCommand extends Command
{
    const NAME = 'name';

    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName('mageacademy:firstcommand:displayname');
        $this->setDescription('First Command');

        $this->addOption(
            self::NAME,
            null,
            InputOption::VALUE_REQUIRED,
            'Name'
        );

        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if ($name = $input->getOption(self::NAME)) {
            $output->writeln('<info>Provided name is `' . $name . '`</info>');
        }

        $output->writeln('<info>My First Command.</info>');
    }
}
