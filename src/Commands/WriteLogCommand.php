<?php

namespace Carlos\Commands;

use Illuminate\Console\Command;

class WriteLogCommmand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'carlos:writelog';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to write in logs laravel';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        info('Write here with command WriteLogCommmand');
    }
}
