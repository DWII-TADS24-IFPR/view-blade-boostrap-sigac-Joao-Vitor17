<?php

namespace App\Providers;

use App\Repositories\Contracts\NivelRepositoryInterface;
use App\Repositories\Eloquent\NivelRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(NivelRepositoryInterface::class, NivelRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
