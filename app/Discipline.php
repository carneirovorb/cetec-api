<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    protected $fillable = [
       'id', 'name', 'size', 'laboratory', 'semester', 'observation', 'workload', 'area_id', 'discipline_type_id', 'course_id',
    ];

    public function area()
    {
        return $this->hasOne('App\Area');
    }

    public function disciplineType()
    {
        return $this->hasOne('App\DisciplineType');
    }
    
    public function course()
    {
        return $this->hasOne('App\Course');
    }
    
    public function academicClasses()
    {
        return $this->belongsTo('App\AcademicClass');
    }

    public function demands()
    {
        return $this->belongsTo('App\Demand');
    }

    public function professorHistories()
    {
        return $this->belongsTo('App\ProfessorHistory');
    }
}
