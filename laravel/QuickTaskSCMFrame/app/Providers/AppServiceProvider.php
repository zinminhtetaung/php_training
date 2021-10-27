<?php

namespace App\Providers;

use App\Contracts\Services\Task\QuickTaskServiceInterface;
use App\Contracts\Dao\Task\QuickTaskDaoInterface;
use App\Dao\Task\QuickTaskDao;
use App\Services\Task\QuickTaskService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Dao Register
        $this->app->bind(QuickTaskDaoInterface::class, QuickTaskDao::class);
        $this->app->bind(QuickTaskServiceInterface::class, QuickTaskService::class);
        // $this->app->bind('App\Contracts\Services\Task\QuickTaskServiceInterface', 'App\Services\Task\QuickTaskService');

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
