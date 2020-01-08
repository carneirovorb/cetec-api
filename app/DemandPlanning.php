<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemandPlanning extends Model
{
    protected $fillable = [
        'id','demand_id', 'discipline_id', 'school_semester_id', 'quantity_classes',
    ];

    public function demand()
    {
        return $this->hasOne('App\Demand');
    }

    public function schoolSemester()
    {
        return $this->hasOne('App\SchoolSemester');
    }

    public function discipline()
    {
        return $this->hasOne('App\Discipline');
    }
}
