<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    //

    public function usuarios()
{
    return $this->belongsToMany(Usuario::class, 'grupo_usuario', 'id_grupo', 'id_usuario');
}

public function horarios()
{
    return $this->belongsToMany(Horario::class, 'grupo_horario', 'id_grupo', 'id_horario');
}



}
