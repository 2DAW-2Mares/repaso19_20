<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $primaryKey = 'codigo';
    public $incrementing = false;

    /**
     * Los ciclos en los que aparece un módulo.
     */
    public function ciclos()
    {
        return $this->belongsToMany('App\Ciclo', 'ciclo_modulo', 'modulo_codigo', 'ciclo_id');
    }

    /**
     * Devuelve la Especialidad de un módulo.
     */
    public function especialidad()
    {
        return $this->belongsTo('App\Especialidad');
    }

    /**
     * Devuelve las preferencias asociadas a este módulo.
     */
    public function preferencias()
    {
        return $this->hasMany('App\Preferencia');
    }

    /**
     * Los usuarios que han elegido este módulo.
     */
    public function users()
    {
        return $this->belongsToMany('App\User')->using('App\Preferencia');
    }

    public function cuantosDocentes() {
        return Preferencia::where('modulo_codigo', $this->codigo)->count();
    }
}
