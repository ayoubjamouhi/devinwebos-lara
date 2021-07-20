<?php

namespace App\Providers;

use App\Providers\SchoolHistory;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class StoreSchoolCreatedHistory
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SchoolHistory  $event
     * @return bool
     */
    public function handle(SchoolHistory $event): bool
    {
        $timestamp = Carbon::now()->toDateTimeString();
        $getSchool = $event->school;
        return DB::table('school_histories')->insert([
            'name'=> $getSchool->name,
            'created_at' => $timestamp
        ]);
    }
}
