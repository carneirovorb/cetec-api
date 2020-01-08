<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassroomPlanning extends Model
{
    protected $fillable = [
        'classroom_day', 'classroom_id', 'on07_08', 'on08_09', 'on09_10', 'on10_11', 'on11_12', 'on13_14',
         'on14_15', 'on15_16', 'on16_17', 'on17_18', 'on18_19', 'on19_20', 'on20_21', 'on21_22', 
    ];

    public function classroom()
    {
        return $this->belongsTo('App\Classroom');
    }
}
