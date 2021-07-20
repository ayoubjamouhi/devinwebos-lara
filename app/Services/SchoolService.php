<?php


namespace App\Services;


use App\Repository\SchoolRepository;

class SchoolService
{
    private $schoolRepository;
    /**
     * SchoolService constructor.
     */
    public function __construct(SchoolRepository $repository)
    {
        $this->schoolRepository = $repository;
    }

    public function getAvailableGroups()
    {
        return $this->schoolRepository->getAvailableGroup();
    }
}
