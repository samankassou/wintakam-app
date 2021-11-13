<?php

namespace App\Providers;

use App\Hasher;
use Hashids\Hashids;
use Illuminate\Support\Facades\Route;
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
        $this->app->bind(Hashids::class, function () {

            return new Hashids(env('HASHIDS_SALT', 10), 12);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Route::bind('id', function ($id) {
            return Hasher::decode($id);
        });
    }
}
