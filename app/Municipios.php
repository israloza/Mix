<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    protected $table='Municipios';
    protected $primaryKey='id_municipios';
    protected $fillable=['descripcion'];
}
