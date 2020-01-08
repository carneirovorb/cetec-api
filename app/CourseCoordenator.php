<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseCoordenator extends Model
{
    protected $fillable = [
       'id', 'course_id', 'professor_id', 'school_semester_id',
    ];

    public function course()
    {
        return $this->hasOne('App\Course');
    }

    public function professor()
    {
        return $this->hasOne('App\Professor');
    }

    public function schoolSemester()
    {
        return $this->hasOne('App\SchoolSemester');
    }
}
