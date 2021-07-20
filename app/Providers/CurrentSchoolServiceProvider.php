<?php

namespace App\Providers;

use App\CurrentSchool\CurrentSchool;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class CurrentSchoolServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CurrentSchool::class, function ($app) {
            $name = config('school');
            $value = $app->make(Request::class)->route('school');
            return new CurrentSchool($name,$value);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
