<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    //
        public function materias()
        {
            return $this->hasMany(Materia::class, 'id_carrera');
        }

}
