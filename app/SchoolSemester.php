<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolSemester extends Model
{
    protected $fillable = [
       'id', 'name',
    ];

    public function areaCoordenator()
    {
        return $this->belongsTo('App\AreaCoordenator');
    }

    public function courseCoordenator()
    {
        return $this->belongsTo('App\CourseCoodenator');
    }

    public function professorHistory()
    {
        return $this->belongsTo('App\ProfessorHistory');
    }

    public function demandPlanning()
    {
        return $this->belongsTo('App\DemandPlanning');
    }
}
