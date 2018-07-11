<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time_works extends Model
{
    protected $fillable = [
        'store_id','day','open','close'
    ];

    public function store(){
        $this->belongsTo('App\Store');
    }
}
