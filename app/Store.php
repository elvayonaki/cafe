<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
        protected $fillable = [
            'user_id','name','motto','descrip','phone','website','lang','lat','alamat1','alamat2','alamat3','alamat4','status'
        ];

        public function time_work(){
            $this->hasMany('App\Time_work');
        }

        public function user(){
            $this->belongsTo('App\User');
        }
}
