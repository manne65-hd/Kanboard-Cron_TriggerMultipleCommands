Cron_TriggerMultipleCommands
============================

Skeleton for a plugin that adds a new custom "batch"-command to the CLI-interface

### Purpose of this plugin
This is not meant to be a _(really)_ productive plugin, but rather the starting point if you want to develop a plugin that adds a new custom "batch"-command to the CLI-interface of Kanboard. An example for a "batch"-command is the built-in **cronjob**-CLI-command.

This example shows you how to run core-CLI-commands along with custom CLI-commands all triggerd from one new "batch"-command.

In order for the DEMO to work, you also have to install the following 2 plugins:
 - https://github.com/manne65-hd/Kanboard-Cron_SingleCustomCommand
 - https://github.com/manne65-hd/Kanboard-Cron_ManyCustomCommands


I made this, while trying to figure out how to make a plugin that can act as a CRON-command and thought I'd share it here, so that others can also use and _(if necessary)_ improve this skeleton.


### Does is actually DO something?
Yes ... this is in fact a fully functioning plugin in order to demonstrate the basic concept.

Whenever being called via ```php cli my-cronjob```  it will trigger the following CLI-commands:
 - Kanboard core CLI-commands
   - notification:overdue-tasks
   - trigger:tasks
 - Custom CLI-commands _(included in my other 2 Cron-Skeleton-Plugins)_
   - my-single-custom-command
   - manycommands:my-second-custom-command
   - manycommands:my-third-custom-command

### Screenshots
![01-CLI-list_my-cronjob](https://user-images.githubusercontent.com/48651533/119499445-04846a00-bd67-11eb-812b-d254a7592e7a.png)

Author
------

- Manfred Hoffmann
- License MIT

Requirements
------------

- Kanboard >= 1.0.35

Installation
------------

You have the choice between 2 methods:

1. Download the zip file and decompress everything under the directory `plugins/Cron_TriggerMultipleCommands`
2. Clone this repository into the folder `plugins/Cron_TriggerMultipleCommands`

Note: Plugin folder is case-sensitive.
