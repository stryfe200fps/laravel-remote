<?php

namespace Stryfe200fps\Remote\Commands;

use Illuminate\Console\Command;

class RemoteCommand extends Command
{
    public $signature = 'remote';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
