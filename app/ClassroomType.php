<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassroomType extends Model
{
    protected $fillable = [
        'id', 'desciption',
    ];

    public function classrooms()
    {
        return $this->hasMany('App\Classroom');
    }
}
