<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    //

    public function hora()
{
    return $this->belongsTo(Hora::class, 'id_hora');
}

public function materia()
{
    return $this->belongsTo(Materia::class, 'id_materia');
}

public function grupos()
{
    return $this->belongsToMany(Grupo::class, 'grupo_horario', 'id_horario', 'id_grupo');
}


}
