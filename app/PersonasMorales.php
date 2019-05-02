<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonasMorales extends Model
{
    protected $table='Personas_morales';
    protected $primaryKey='id_personas_morales';
    protected $fillable=['razon_den_social','ap_rep','am_rep','nom_rep'];
}
