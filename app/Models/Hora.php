<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    //

    public function horarios()
{
    return $this->hasMany(Horario::class, 'id_hora');
}


}
