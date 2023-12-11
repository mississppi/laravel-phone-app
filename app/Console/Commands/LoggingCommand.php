<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class LoggingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cli:logging';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'cliからロギングするコマンドです';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Log::info('テスト::Commandからロギング');
        $this->info('logged successfully');
    }
}
