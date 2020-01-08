<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = [
        'id', 'classroom_type_id', 'size',
    ];

    public function classroomType()
    {
        return $this->hasOne('App\ClassroomType');
    }

    public function classroomPlanning()
    {
        return $this->belongsTo('App\ClassroomPlanning');
    }
}
