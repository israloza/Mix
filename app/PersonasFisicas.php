<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonasFisicas extends Model
{
    protected $table='Personas_fisicas';
    protected $primaryKey='id_personas_fisicas';
    protected $fillable=['ap','am','nombre'];

}
