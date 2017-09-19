<?php
namespace Flipbox\LumenGenerator\Console;

use Illuminate\Console\Command;

abstract class AbstractCommand extends Command
{
    /**
     * Shorthand for Laravel 5.5.*
     * https://github.com/flipboxstudio/lumen-generator/issues/18
     *
     * @return mixed
     */
    public function handle()
    {
        $this->fire();
    }
}
