<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
       'id', 'initials', 'name', 'center_id',     
    ];

    public function center()
    {
        return $this->hasOne('App\Center');
    }

    public function courseCoordenator()
    {
        return $this->belongsTo('App\CourseCoordenator');
    }

    public function disciplines()
    {
        return $this->belongsTo('App\Discipline');
    }
}
