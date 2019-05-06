<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModalidadesOtrosTipos extends Model
{
    //
    protected $table='Modalidades_otros_tipos';
    protected $primaryKey='id_modalidades_otros_tipos';
    protected $fillable=['descripcion'];

}
