<?php

namespace App\Factories;

use App\Repositories;

class RepositoryFactory
{
    public function __construct(string $type)
    {
        switch ($type) {
            case 'AcademicClass':
                return new \AcademicClassRepository;
            case 'AptDiscipline':
                return new \AptDisciplineRepository;
            case 'Area':
                return new \AreaRepository;
            case 'AreaCoordenator':
                return new \AreaCoordenatorRepository;
            case 'Center':
                return new \CenterRepository;
            case 'Classroom':
                return new \ClassroomRepository;
            case 'ClassroomPlanning':
                return new \ClassroomPlanningRepository;
            case 'ClassroomType':
                return new \ClassroomTypeRepository;
            case 'ClassType':
                return new \ClassTypeRepository;
            case 'Course':
                return new \CourseRepository;
            case 'CourseCoordenator':
                return new \CourseCoordenatorRepository;
            case 'Demand':
                return new \DemandRepository;
            case 'DemandPlanning':
                return new \DemandPlanningRepository;
            case 'Discipline':
                return new \DisciplineRepository;
            case 'DisciplineType':
                return new \DisciplineTypeRepository;
            case 'Professor':
                return new \ProfessorRepository;
            case 'ProfessorHistory':
                return new \ProfessorHistoryRepository;
            case 'SchoolSemester':
                return new \SchoolSemesterRepository;
            case 'User':
                return new \UserRepository;
            default:
                return null;  
        }
    }
}