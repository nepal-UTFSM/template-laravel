<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateTestingDatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:testing';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create database for testing purposes';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::statement('CREATE DATABASE testing');

        $this->info('Database created successfully!');

        return 0;
    }
}
