<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estatus extends Model
{
    //

    public function historicos()
{
    return $this->hasMany(Historico::class, 'id_estatus');
}

}
