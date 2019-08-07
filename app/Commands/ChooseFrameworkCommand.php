<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class ChooseFrameworkCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'todos:framework';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Choose a CSS framework';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $option = $this->menu('CSS Framework', [
            'Tailwind CSS',
            'Bootstrap',
            'Bulma',
        ])->open();

        $this->info("You have chosen the option number #$option");
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
