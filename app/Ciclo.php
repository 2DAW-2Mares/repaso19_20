<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{
    public static $grados = array('FPB', 'GM', 'GS');

    /**
     * Los módulos que componen un ciclo.
     */
    public function modulos()
    {
        return $this->belongsToMany('App\Modulo', 'ciclo_modulo', 'ciclo_id', 'modulo_codigo');
    }
}
