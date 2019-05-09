<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModalidadesEntrega extends Model
{
    protected $table='Modalidades_entregas';
    protected $primaryKey='id_modalidades_entrega';
    protected $fillable=['descripcion'];

}
