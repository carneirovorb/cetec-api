<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessorHistory extends Model
{
    protected $fillable = [
        'id', 'professor_id', 'discipline_id', 'school_semester_id',
    ];

    public function professor()
    {
        return $this->hasOne('App\Professor');
    }

    public function discipline()
    {
        return $this->hasOne('App\Discipline');
    }

    public function schoolSemester()
    {
        return $this->hasOne('App\SchoolSemester');
    }
}
