<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function profile_user(){
        return $this->hasOne('App\Profile_user');
    }
    /*
    * Method untuk menambahkan role (hak akses) baru pada user
    */ 
    public function putRole($role)
    {
        if (is_string($role))
        {
            $role = Role::whereRoleName($role)->first();
        }
        return $this->roles()->attach($role);
    }
    /*
    * Method untuk menghapus role (hak akses) pada user
    */ 
    public function forgetRole($role)
    {
        if (is_string($role))
        {
            $role = Role::whereRoleName($role)->first();
        }
        return $this->roles()->detach($role);
    }
    /*
    * Method untuk mengecek apakah user yang sedang login punya hak akses untuk mengakses page sesuai rolenya
    */ 
    public function hasRole($roleName)
    {
        foreach ($this->roles as $role)
        {
            if ($role->role_name === $roleName) return true;
        }
            return false;
    }
}
