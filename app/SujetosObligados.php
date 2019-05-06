<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SujetosObligados extends Model
{
    //
    protected $table='Sujetos_obligados';
    protected $primaryKey='id_sujetos_obligados';
    protected $fillable=['lugar','fecha','hora'];

}
