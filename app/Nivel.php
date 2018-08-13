<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    public function users(){

        return $this->hasMany('App\User' ,'id_role');

    }
}
