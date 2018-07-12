<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','pph','descrip','status'
    ]; 

    public function User(){
        return $this->belongsTo('App\User');
    }
}
