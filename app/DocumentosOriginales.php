<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentosOriginales extends Model
{
    //
    protected $table='DocumentosOriginales';
    protected $primaryKey='id_documentos_originales';
    protected $fillable=['descripcion'];
}
