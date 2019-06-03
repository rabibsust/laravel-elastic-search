<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Articles\ArticlesRepository;
use App\Articles\EloquentArticlesRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ArticlesRepository::class, function () {
            return new EloquentArticlesRepository();
        });
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
