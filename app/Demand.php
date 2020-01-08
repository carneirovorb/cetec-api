<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    protected $fillable = [
        'id', 'discipline_id', 'quantity', 'observation',
    ];

    public function discipline()
    {
        return $this->hasOne('App\Discipline');
    }

    public function demandPlanning()
    {
        return $this->belongsTo('App\DemandPlanning');
    }
}
