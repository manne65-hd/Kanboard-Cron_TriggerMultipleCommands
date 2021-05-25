<?php

namespace Kanboard\Plugin\Cron_TriggerMultipleCommands\Console;

use Kanboard\Console\BaseCommand;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Output\NullOutput;


/**
 * Class TriggerMultipleCommands
 *
 */
class TriggerMultipleCommands extends BaseCommand
{
    private $commands = array(
        'notification:overdue-tasks',
        'trigger:tasks',
        'my-single-custom-command',
        'manycommands:my-second-custom-command',
        'manycommands:my-third-custom-command',
    );

    protected function configure()
    {
        $this
            ->setName('my-cronjob')
            ->setDescription('Run some core and custom CLI-tasks ...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        foreach ($this->commands as $command) {
            $job = $this->getApplication()->find($command);
            $job->run(new ArrayInput(array('command' => $command)), new NullOutput());
        }
    }
}
