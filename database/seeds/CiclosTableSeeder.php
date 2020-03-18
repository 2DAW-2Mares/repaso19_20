<?php

use App\Ciclo;
use Illuminate\Database\Seeder;

class CiclosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciclo::truncate();
        foreach( self::$arrayCiclos as $ciclo ) {
            $c = new Ciclo;
            $c->nombre = $ciclo['nombre'];
            $c->grado = $ciclo['grado'];
            $c->save();
        }
    }

    public static $arrayCiclos = [
        array("grado" =>'ESO-Bach', "nombre" =>"E.S.O. y Bachillerato"),
        array("grado" =>'FPB', "nombre" =>"Informática de Oficina"),
        array("grado" =>'FPB', "nombre" =>"Informática y Comunicaciones"),
        array("grado" =>'GM', "nombre" =>"Sistemas Microinformáticos y Redes"),
        array("grado" =>'GS', "nombre" =>"Administración de Sistemas Informáticos en Red"),
        array("grado" =>'GS', "nombre" =>"Desarrollo de Aplicaciones Multiplataforma"),
        array("grado" =>'GS', "nombre" =>"Desarrollo de Aplicaciones Web")
    ];

}
