<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AptDiscipline extends Model
{
    protected $fillable = [
        'id', 'professor_id', 'discipline_id',
    ];

    public function discipline()
    {
        return $this->hasOne('App\Discipline');
    }

    public function professor()
    {
        return $this->hasOne('App\Professor');
    }
}
