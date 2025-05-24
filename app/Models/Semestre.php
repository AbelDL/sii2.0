<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    //
    public function usuarios()
{
    return $this->hasMany(Usuario::class, 'id_semestre');
}

public function materias()
{
    return $this->hasMany(Materia::class, 'id_semestre');
}


}
