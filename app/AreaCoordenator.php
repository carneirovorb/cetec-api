<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaCoordenator extends Model
{
    protected $fillable = [
        'id', 'area_id', 'professor_id', 'school_semester_id',
    ];

    public function area()
    {
        return $this->hasOne('App\Area');
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
