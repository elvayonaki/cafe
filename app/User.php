<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'role_id','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile_user(){
        return $this->hasOne('App\Profile_user');
    }
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function store()
    {
        return $this->hasOne('App\Store');
    }
    /** 
    * Relasi One To Many ke tabel Product
    */
    public function Products(){
        return $this->belongsTo('App\Product');
    }
}
