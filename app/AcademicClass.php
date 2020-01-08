<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicClass extends Model
{
    protected $fillable = [
        'id', 'class_type_id', 'professor_id', 'discipline_id',
    ];

    public function classType()
    {
        return $this->hasOne('App\ClassType');
    }

    public function professor()
    {
        return $this->hasOne('App\Professor');
    }

    public function discipline()
    {
        return $this->hasOne('App\Discipline');
    }
}
