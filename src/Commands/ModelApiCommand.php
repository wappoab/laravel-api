<?php

namespace Wappo\ModelApi\Commands;

use Illuminate\Console\Command;

class ModelApiCommand extends Command
{
    public $signature = 'laravel-model-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
