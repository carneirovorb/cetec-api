<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = [
       'id', 'name', 'area_id',
    ];

    public function area()
    {
        return $this->hasOne('App\Area');
    }

    public function academicClasses()
    {
        return $this->belongsTo('App\AcademicClass');
    }

    public function aptDisciplines()
    {
        return $this->belongsTo('App\AptDiscipline');
    }

    public function professorHistories()
    {
        return $this->belongsTo('App\ProfessorHistory');
    }

    public function areaCoordenator()
    {
        return $this->belongsTo('App\AreaCoordenator');
    }

    public function courseCoordenator()
    {
        return $this->belongsTo('App\CourseCoordenator');
    }
}
