<?php

namespace Carlos\Commands;

use Illuminate\Support\ServiceProvider;
use Illuminate\Console\Scheduling\Schedule;

class ArtisanWriteLogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.carlos.write-log', function($app){
            return $app['Carlos\Commands\WriteLogCommand'];
        });
        $this->commands('command.carlos.write-log');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->booted(function () {
            $schedule = $this->app->make(Schedule::class);
            $schedule->command('some:command')->everyMinute();
        });
    }
}
