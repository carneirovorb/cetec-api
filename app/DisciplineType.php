<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisciplineType extends Model
{
    protected $fillable = [
        'id', 'description',
    ];

    public function disciplines()
    {
        return $this->belongsTo('App\Discipline');
    }
}
