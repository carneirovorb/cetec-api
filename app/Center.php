<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $fillable = [
        'id', 'initals', 'name',
    ];

    public function areas()
    {
        return $this->belongsTo('App\Area');
    }

    public function courses()
    {
        return $this->belongsTo('App\Courses');
    }

}
