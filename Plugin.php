<?php

namespace Kanboard\Plugin\Cron_TriggerMultipleCommands;

use Kanboard\Core\Plugin\Base;
use Kanboard\Plugin\Cron_TriggerMultipleCommands\Console\TriggerMultipleCommands;

class Plugin extends Base
{
    public function initialize()
    {
        // create a custom "batch"-CLI-command
        $this->cli->add(new TriggerMultipleCommands($this->container));
    }

    public function getClasses()
    {
        return [
            'Plugin\Cron_TriggerMultipleCommands\Console' => [
                'TriggerMultipleCommands',
                ],
        ];
    }

    public function getPluginName()
    {
        return 'Cron_TriggerMultipleCommands';
    }

    public function getPluginDescription()
    {
        return t('Add a new "batch"-command to Kanboard\'s CLI-interface');
    }

    public function getPluginAuthor()
    {
        return 'Manfred Hoffmann';
    }

    public function getPluginVersion()
    {
        return '0.9.0';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.35';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/manne65-hd/Kanboard-Cron_TriggerMultipleCommands';
    }
}
?>
