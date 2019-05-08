<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosPersonales extends Model
{
    protected $table='Datos_personales';
    protected $primaryKey='id_datos_personales';
    protected $fillable=['descripcion'];
}
