<?php


namespace App\Repository;

use App\Models\School;

class SchoolRepository
{
    private $school;
    /**
     * SchoolRepository constructor.
     */
    public function __construct(School $school)
    {
        $this->school = $school;
    }

    public function getAvailableGroup()
    {
        return $this->school->get();
        //return ['a','b'];
    }
}
