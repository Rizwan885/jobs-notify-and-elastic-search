<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class StoreCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'storage:count';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return $this->info("Running from command");
        // return Command::SUCCESS;
    }
}
