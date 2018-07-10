<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time_works extends Model
{
    public function store(){
        $this->belongsTo('App\Store');
    }
}
