<?php

namespace App\Commands;

use DB;
use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class AddTodosCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'todos:add {todo}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Add a todo';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $todo = $this->argument('todo');

        DB::table('todos')->insert(['title' => $todo]);

        $this->info('Todo has been added');
        $this->notify('Todos App', 'Todo has been added!');
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
