<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
            //
            public function usuarios()
        {
            return $this->hasMany(Usuario::class, 'id_direccion');
        }

}
