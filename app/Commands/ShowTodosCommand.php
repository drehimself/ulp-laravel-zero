<?php

namespace App\Commands;

use DB;
use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class ShowTodosCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'todos:show';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Show all todos';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $todos = DB::table('todos')->get();

        $todos->each(function ($todo) {
            $completed = $todo->completed ? ' | Completed' : ' | Not Completed';
            $this->info($todo->id.'. '.$todo->title.$completed);
        });
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
