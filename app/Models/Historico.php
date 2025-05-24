<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    //

    public function usuario()
{
    return $this->belongsTo(Usuario::class, 'id_usuario');
}

public function materia()
{
    return $this->belongsTo(Materia::class, 'id_materia');
}

public function estatus()
{
    return $this->belongsTo(Estatus::class, 'id_estatus');
}

}
