<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    //
    protected $table = 'especialidades';

    /**
     * Devuelve los usuarios de una especialidad.
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }

    /**
     * Devuelve los módulos asignados a una especialidad.
     */
    public function modulos()
    {
        return $this->hasMany('App\Modulo');
    }
}
