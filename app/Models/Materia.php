<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //

    public function carrera()
{
    return $this->belongsTo(Carrera::class, 'id_carrera');
}

public function semestre()
{
    return $this->belongsTo(Semestre::class, 'id_semestre');
}

public function horarios()
{
    return $this->hasMany(Horario::class, 'id_materia');
}

public function historico()
{
    return $this->hasMany(Historico::class, 'id_materia');
}

}
