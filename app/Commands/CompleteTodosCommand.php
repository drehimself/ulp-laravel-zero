<?php

namespace App\Commands;

use DB;
use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class CompleteTodosCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'todos:complete {id}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Complete a todo given an id';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $id = $this->argument('id');

        DB::table('todos')->where('id', $id)->update(['completed' => true]);

        $this->info('Todo has been marked as complete');
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
