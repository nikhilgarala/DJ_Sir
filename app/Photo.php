<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $guarded = ['id'];

    public function car()
    {
        return $this->belongsTo('App\car');
    }
}
