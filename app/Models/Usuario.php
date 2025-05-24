<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    public function rol()
{
    return $this->belongsTo(Rol::class, 'id_rol');
}

public function direccion()
{
    return $this->belongsTo(Direccion::class, 'id_direccion');
}

public function semestre()
{
    return $this->belongsTo(Semestre::class, 'id_semestre');
}

public function grupos()
{
    return $this->belongsToMany(Grupo::class, 'grupo_usuario', 'id_usuario', 'id_grupo');
}

public function historico()
{
    return $this->hasMany(Historico::class, 'id_usuario');
}

}
