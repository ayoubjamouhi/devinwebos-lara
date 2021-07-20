<?php

namespace App\Observers;

use App\Models\School;
use App\Providers\SchoolHistory;
use Illuminate\Support\Str;

class SchoolObserver
{
    /**
     * Handle the School "creating" event.
     *
     * @param  \App\Models\School  $school
     * @return void
     */
    public function creating(School $school)
    {
        $school->slug = Str::slug($school->name);
    }

    /**
     * Handle the School "created" event.
     *
     * @param  \App\Models\School  $school
     * @return void
     */
    public function created(School $school)
    {
        $school->save();
        event(new SchoolHistory($school));
    }

    /**
     * Handle the School "updated" event.
     *
     * @param  \App\Models\School  $school
     * @return void
     */
    public function updated(School $school)
    {
        //
    }

    /**
     * Handle the School "deleted" event.
     *
     * @param  \App\Models\School  $school
     * @return void
     */
    public function deleted(School $school)
    {
        //
    }

    /**
     * Handle the School "restored" event.
     *
     * @param  \App\Models\School  $school
     * @return void
     */
    public function restored(School $school)
    {
        //
    }

    /**
     * Handle the School "force deleted" event.
     *
     * @param  \App\Models\School  $school
     * @return void
     */
    public function forceDeleted(School $school)
    {
        //
    }
}
