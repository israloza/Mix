<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logins extends Model
{
    //
    protected $table='Login';
    protected $primaryKey='id_login';
    protected $fillable=['nombre','ap','am','contraseña','correo'];
}
