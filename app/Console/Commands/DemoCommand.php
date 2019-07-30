<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DemoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo Command description';

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
        $bar = $this->output->createProgressBar(12);

        $bar->start();

        for ($i=1; $i <= 12; $i++) {
            sleep(1);

            $bar->advance();
        }

        $bar->finish();
    }
}
