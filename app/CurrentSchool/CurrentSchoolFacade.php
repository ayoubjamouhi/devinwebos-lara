<?php

namespace App\CurrentSchool;
class CurrentSchoolFacade extends  \Illuminate\Support\Facades\Facade {
    protected static  function getFacadeAccessor(): string
    {
        return "currentschool";
    }
}
