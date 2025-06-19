<?php

namespace MarcelWeidum\ExpirationNoticePlugin\Commands;

use Illuminate\Console\Command;

class ExpirationNoticePluginCommand extends Command
{
    public $signature = 'filament-expiration-notice';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
