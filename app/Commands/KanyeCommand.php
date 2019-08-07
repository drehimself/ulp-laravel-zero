<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class KanyeCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'kanye:quote';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Grab a quote from Kanye West';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $response = json_decode(file_get_contents('https://api.kanye.rest'));

        $this->info($response->quote);
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
