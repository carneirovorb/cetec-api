<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassType extends Model
{
    protected $fillable = [
        'id', 'description',
    ];

    public function academicClasses()
    {
        return $this->belongsTo('App\AcademicClass');
    }
}
