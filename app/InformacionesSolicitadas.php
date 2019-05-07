<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformacionesSolicitadas extends Model
{
    protected $table='Informaciones_solicitadas';
    protected $primaryKey='id_informaciones_solicitadas';
    protected $fillable=['descripcion'];
}
