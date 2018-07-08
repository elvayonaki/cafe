<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profile_user extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'user_id','nama'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
