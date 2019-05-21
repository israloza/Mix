<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposEmpleados extends Model
{
    protected $table='tipos_empleados';
    protected $primaryKey='id_tipo_empleado';
    protected $fillable=['descripcion'];
}
