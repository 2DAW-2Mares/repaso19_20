<?php

use App\Especialidad;
use Illuminate\Database\Seeder;

class EspecialidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Especialidad::truncate();
        foreach( self::$arrayEspecialidades as $especialidad ) {
            $c = new Especialidad();
            $c->nombre = $especialidad;
            $c->save();
        }
    }

    private static $arrayEspecialidades = ['Informática', 'Sistemas y Aplicaciones Informáticas'];
}
