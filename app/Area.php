<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'id', 'initials', 'name', 'center_id',
    ];

    public function center()
    {
        return $this->hasOne('App\Center');
    }

    public function professors()
    {
        return $this->belongsTo('App\Professor');
    }

    public function disciplines()
    {
        return $this->belongsTo('App\Discipline');
    }
}
