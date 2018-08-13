<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{ 
    
    protected $fillable = [
    'id_usuario', 'sexo', 'data_nacimento',
];
    
    

    public function User(){

        return $this->hasMany('App\User','id','user_id');

    }
}
