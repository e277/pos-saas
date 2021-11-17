<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;
use Illuminate\Database\Eloquent\Builder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('currency', function (int $number) {
            return '$'.number_format($number, 2, '.', ',');;
        });

        Builder::macro('search', function($field, $string){
            return $string ? $this->where($field, "like", '%'.$string.'%') : $this;
        });
    }
}
