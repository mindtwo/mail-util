<?php

namespace mindtwo\MailUtil\Commands;

use Illuminate\Console\Command;

class MailUtilCommand extends Command
{
    public $signature = 'mail-util';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
