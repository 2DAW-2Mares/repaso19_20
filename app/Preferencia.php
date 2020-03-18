<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Preferencia extends Pivot
{
    public static $roles = array('Gestor', 'Colaborador');

    public $incrementing = true;

    /**
     * Devuelve el usuario de una preferencia.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Devuelve el módulo de una preferencia.
     */
    public function modulo()
    {
        return $this->belongsTo('App\Modulo');
    }

}
