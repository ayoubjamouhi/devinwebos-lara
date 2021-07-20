<?php

namespace App\Providers;

use App\Http\Controllers\SchoolController;
use App\Models\School;
use App\Repository\SchoolRepository;
use App\Services\SchoolService;
use Illuminate\Support\ServiceProvider;

class SchoolProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

/*        $this->app->bind(SchoolService::class, SchoolController::class);
        $this->app->bind(SchoolRepository::class, SchoolService::class);*/
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
