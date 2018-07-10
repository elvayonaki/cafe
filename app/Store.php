<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
        public function time_work(){
            $this->hasMany('App\Time_work');
        }

        public function user(){
            $this->belongsTo('App\User');
        }
}
