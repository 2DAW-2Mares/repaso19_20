<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Preferencia extends Pivot
{
    public static $roles = array('Gestor', 'Colaborador');
    protected $table = 'preferencias';

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

    public static function porModulo() {
        $preferenciasPorModulo = self::selectRaw('modulo_codigo, count(*) as vecesElegido' )->groupBy('modulo_codigo')->get();
        $preferenciasPorModuloArray = array();
        foreach ($preferenciasPorModulo as $modulo) {
            $preferenciasPorModuloArray[$modulo->modulo_codigo] = $modulo->vecesElegido;
        }
        return $preferenciasPorModuloArray;
    }

}
