<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

use App\Services\SchoolService;

class SchoolController extends Controller
{
    private $schoolService;
    public function __construct(SchoolService $schoolService) {
        $this->schoolService = $schoolService;
    }
    public function index() {
/*        $school = School::create([
            'name' => 'Ayoub'
        ]);*/
       // dd($school);
    }
    public function getAvailableGroups()
    {
        //dd($this->schoolService);
        return $this->schoolService->getAvailableGroups();
    }
}
