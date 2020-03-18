<?php

use App\Modulo;
use App\Ciclo;
use App\Especialidad;
use Illuminate\Database\Seeder;

class ModulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modulo::truncate();
        foreach( self::$arrayModulos as $modulo ) {
            if(!$m = Modulo::find($modulo['codigo'])) $m = new Modulo;
            $m->codigo = $modulo['codigo'];
            $m->nombre = $modulo['nombre'];
            if($ciclo = Ciclo::where('nombre', $modulo['ciclo'])->first()) {
                $m->ciclos()->attach($ciclo);
            }
            if($especialidad = Especialidad::where('nombre', $modulo['especialidad'])->first()) {
                $m->especialidad_id = $especialidad->id;
            }
            $m->save();
        }
    }

    public static $arrayModulos = [
        array("codigo" =>3031, "nombre" =>"Ofimática y archivo de documentos", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Informática de Oficina"),
        array("codigo" =>3029, "nombre" =>"Montaje y mantenimiento de sistemas y componentes informáticos", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Informática de Oficina"),
        array("codigo" =>3016, "nombre" =>"Instalación y mantenimiento de redes para transmisión de datos", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Informática de Oficina"),
        array("codigo" =>3030, "nombre" =>"Operaciones auxiliares para la configuración y la explotación", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Informática de Oficina"),

        array("codigo" =>3015, "nombre" =>"Equipos eléctricos y electrónicos", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Informática y Comunicaciones"),
        array("codigo" =>3029, "nombre" =>"Montaje y mantenimiento de sistemas y componentes informáticos", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Informática y Comunicaciones"),
        array("codigo" =>3016, "nombre" =>"Instalación y mantenimiento de redes para transmisión de datos", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Informática y Comunicaciones"),
        array("codigo" =>3030, "nombre" =>"Operaciones auxiliares para la configuración y la explotación", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Informática y Comunicaciones"),

        array("codigo" =>221, "nombre" =>"Montaje y mantenimiento de equipo", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Sistemas Microinformáticos y Redes"),
        array("codigo" =>222, "nombre" =>"Sistemas operativos monopuesto", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Sistemas Microinformáticos y Redes"),
        array("codigo" =>223, "nombre" =>"Aplicaciones ofimáticas", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Sistemas Microinformáticos y Redes"),
        array("codigo" =>225, "nombre" =>"Redes locales", "especialidad" =>"Informática", "ciclo" => "Sistemas Microinformáticos y Redes"),
        array("codigo" =>224, "nombre" =>"Sistemas operativos en red", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Sistemas Microinformáticos y Redes"),
        array("codigo" =>226, "nombre" =>"Seguridad informática", "especialidad" =>"Informática", "ciclo" => "Sistemas Microinformáticos y Redes"),
        array("codigo" =>227, "nombre" =>"Servicios en red", "especialidad" =>"Informática", "ciclo" => "Sistemas Microinformáticos y Redes"),
        array("codigo" =>228, "nombre" =>"Aplicaciones web", "especialidad" =>"Informática", "ciclo" => "Sistemas Microinformáticos y Redes"),

        array("codigo" =>369, "nombre" =>"Implantación de sistemas operativos", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Administración de Sistemas Informáticos en Red"),
        array("codigo" =>370, "nombre" =>"Planificación y administración de redes", "especialidad" =>"Informática", "ciclo" => "Administración de Sistemas Informáticos en Red"),
        array("codigo" =>371, "nombre" =>"Fundamentos de hardware", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Administración de Sistemas Informáticos en Red"),
        array("codigo" =>372, "nombre" =>"Gestión de bases de datos", "especialidad" =>"Informática", "ciclo" => "Administración de Sistemas Informáticos en Red"),
        array("codigo" =>373, "nombre" =>"Lenguajes de marca y sistemas de gestión de información", "especialidad" =>"Informática", "ciclo" => "Administración de Sistemas Informáticos en Red"),
        array("codigo" =>374, "nombre" =>"Administración de sistemas operativos", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Administración de Sistemas Informáticos en Red"),
        array("codigo" =>375, "nombre" =>"Servicios de red e Internet", "especialidad" =>"Informática", "ciclo" => "Administración de Sistemas Informáticos en Red"),
        array("codigo" =>376, "nombre" =>"Implantación de aplicaciones web", "especialidad" =>"Informática", "ciclo" => "Administración de Sistemas Informáticos en Red"),
        array("codigo" =>377, "nombre" =>"Administración de sistemas gestores de bases de datos", "especialidad" =>"Informática", "ciclo" => "Administración de Sistemas Informáticos en Red"),
        array("codigo" =>378, "nombre" =>"Seguridad y alta disponibilidad", "especialidad" =>"Informática", "ciclo" => "Administración de Sistemas Informáticos en Red"),

        array("codigo" =>483, "nombre" =>"Sistemas informáticos", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Desarrollo de Aplicaciones Multiplataforma"),
        array("codigo" =>484, "nombre" =>"Bases de Datos", "especialidad" =>"Informática", "ciclo" => "Desarrollo de Aplicaciones Multiplataforma"),
        array("codigo" =>485, "nombre" =>"Programación", "especialidad" =>"Informática", "ciclo" => "Desarrollo de Aplicaciones Multiplataforma"),
        array("codigo" =>487, "nombre" =>"Entornos de desarrollo", "especialidad" =>"Informática", "ciclo" => "Desarrollo de Aplicaciones Multiplataforma"),
        array("codigo" =>373, "nombre" =>"Lenguajes de marcas y sistemas de gestión de información", "especialidad" =>"Informática", "ciclo" => "Desarrollo de Aplicaciones Multiplataforma"),
        array("codigo" =>486, "nombre" =>"Acceso a datos", "especialidad" =>"Informática", "ciclo" => "Desarrollo de Aplicaciones Multiplataforma"),
        array("codigo" =>488, "nombre" =>"Desarrollo de interfaces", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Desarrollo de Aplicaciones Multiplataforma"),
        array("codigo" =>489, "nombre" =>"Programación multimedia y dispositivos móviles", "especialidad" =>"Informática", "ciclo" => "Desarrollo de Aplicaciones Multiplataforma"),
        array("codigo" =>490, "nombre" =>"Programación de servicios y procesos", "especialidad" =>"Informática", "ciclo" => "Desarrollo de Aplicaciones Multiplataforma"),
        array("codigo" =>491, "nombre" =>"Sistemas de gestión empresarial", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Desarrollo de Aplicaciones Multiplataforma"),

        array("codigo" =>483, "nombre" =>"Sistemas informáticos", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Desarrollo de Aplicaciones Web"),
        array("codigo" =>484, "nombre" =>"Bases de Datos", "especialidad" =>"Informática", "ciclo" => "Desarrollo de Aplicaciones Web"),
        array("codigo" =>485, "nombre" =>"Programación", "especialidad" =>"Informática", "ciclo" => "Desarrollo de Aplicaciones Web"),
        array("codigo" =>487, "nombre" =>"Entornos de desarrollo", "especialidad" =>"Informática", "ciclo" => "Desarrollo de Aplicaciones Web"),
        array("codigo" =>373, "nombre" =>"Lenguajes de marcas y sistemas de gestión de información", "especialidad" =>"Informática", "ciclo" => "Desarrollo de Aplicaciones Web"),
        array("codigo" =>612, "nombre" =>"Desarrollo web en entorno cliente", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Desarrollo de Aplicaciones Web"),
        array("codigo" =>613, "nombre" =>"Desarrollo web en entorno servidor", "especialidad" =>"Informática", "ciclo" => "Desarrollo de Aplicaciones Web"),
        array("codigo" =>614, "nombre" =>"Despliegue de aplicaciones web", "especialidad" =>"Informática", "ciclo" => "Desarrollo de Aplicaciones Web"),
        array("codigo" =>615, "nombre" =>"Diseño de interfaces web", "especialidad" =>"Sistemas y Aplicaciones Informáticas", "ciclo" => "Desarrollo de Aplicaciones Web")
    ];

}
