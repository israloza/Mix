<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    //
    protected $table='Personas';
    protected $primaryKey='id_persona';
    protected $fillable=['nombre','ap','am','id_user'];

    function getUser(){
        return $this->hasMany("App\User",'id_user','id_user');
    }
}
