<?php

namespace Atnic\PaperDashboard\Providers;

use Atnic\PaperDashboard\Console\Commands\PaperDashboardMakeCommand;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/paper-dashboard.php' => config_path('paper-dashboard.php'),
        ], 'config');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'paper-dashboard');
        $this->publishes([
            __DIR__.'/../../resources/views' => resource_path('views/vendor/paper-dashboard')
        ], 'views');
        if ($this->app->runningInConsole()) {
            $this->commands([
                PaperDashboardMakeCommand::class,
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/paper-dashboard.php', 'paper-dashboard'
        );
    }
}
