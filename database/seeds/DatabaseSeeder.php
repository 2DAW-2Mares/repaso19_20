<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        //
        Schema::enableForeignKeyConstraints();
    }

    private static $arrayEspecialidades = ['Informática', 'Sistemas y Aplicaciones Informáticas'];

    public static $arrayCiclos = [
        array("grado" =>'FPB', "nombre" =>"Informática de Oficina"),
        array("grado" =>'FPB', "nombre" =>"Informática y Comunicaciones"),
        array("grado" =>'GM', "nombre" =>"Sistemas Microinformáticos y Redes"),
        array("grado" =>'GS', "nombre" =>"Administración de Sistemas Informáticos en Red"),
        array("grado" =>'GS', "nombre" =>"Desarrollo de Aplicaciones Multiplataforma"),
        array("grado" =>'GS', "nombre" =>"Desarrollo de Aplicaciones Web")
    ];

    public static $arrayModulos = [
        array("codigo" =>3031, "nombre" =>"Ofimática y archivo de documentos", "especialidad" =>"2", "ciclo" =>"1"),
        array("codigo" =>3029, "nombre" =>"Montaje y mantenimiento de sistemas y componentes informáticos", "especialidad" =>"2", "ciclo" =>"1"),
        array("codigo" =>3016, "nombre" =>"Instalación y mantenimiento de redes para transmisión de datos", "especialidad" =>"2", "ciclo" =>"1"),
        array("codigo" =>3030, "nombre" =>"Operaciones auxiliares para la configuración y la explotación", "especialidad" =>"2", "ciclo" =>"1"),

        array("codigo" =>3015, "nombre" =>"Equipos eléctricos y electrónicos", "especialidad" =>"2", "ciclo" =>"2"),
        array("codigo" =>3029, "nombre" =>"Montaje y mantenimiento de sistemas y componentes informáticos", "especialidad" =>"2", "ciclo" =>"2"),
        array("codigo" =>3016, "nombre" =>"Instalación y mantenimiento de redes para transmisión de datos", "especialidad" =>"2", "ciclo" =>"2"),
        array("codigo" =>3030, "nombre" =>"Operaciones auxiliares para la configuración y la explotación", "especialidad" =>"2", "ciclo" =>"2"),

        array("codigo" =>221, "nombre" =>"Montaje y mantenimiento de equipo", "especialidad" =>"2", "ciclo" =>"3"),
        array("codigo" =>222, "nombre" =>"Sistemas operativos monopuesto", "especialidad" =>"2", "ciclo" =>"3"),
        array("codigo" =>223, "nombre" =>"Aplicaciones ofimáticas", "especialidad" =>"2", "ciclo" =>"3"),
        array("codigo" =>225, "nombre" =>"Redes locales", "especialidad" =>"1", "ciclo" =>"3"),
        array("codigo" =>224, "nombre" =>"Sistemas operativos en red", "especialidad" =>"2", "ciclo" =>"3"),
        array("codigo" =>226, "nombre" =>"Seguridad informática", "especialidad" =>"1", "ciclo" =>"3"),
        array("codigo" =>227, "nombre" =>"Servicios en red", "especialidad" =>"1", "ciclo" =>"3"),
        array("codigo" =>228, "nombre" =>"Aplicaciones web", "especialidad" =>"1", "ciclo" =>"3"),

        array("codigo" =>369, "nombre" =>"Implantación de sistemas operativos", "especialidad" =>"2", "ciclo" =>"4"),
        array("codigo" =>370, "nombre" =>"Planificación y administración de redes", "especialidad" =>"1", "ciclo" =>"4"),
        array("codigo" =>371, "nombre" =>"Fundamentos de hardware", "especialidad" =>"2", "ciclo" =>"4"),
        array("codigo" =>372, "nombre" =>"Gestión de bases de datos", "especialidad" =>"1", "ciclo" =>"4"),
        array("codigo" =>373, "nombre" =>"Lenguajes de marca y sistemas de gestión de información", "especialidad" =>"1", "ciclo" =>"4"),
        array("codigo" =>374, "nombre" =>"Administración de sistemas operativos", "especialidad" =>"2", "ciclo" =>"4"),
        array("codigo" =>375, "nombre" =>"Servicios de red e Internet", "especialidad" =>"1", "ciclo" =>"4"),
        array("codigo" =>376, "nombre" =>"Implantación de aplicaciones web", "especialidad" =>"1", "ciclo" =>"4"),
        array("codigo" =>377, "nombre" =>"Administración de sistemas gestores de bases de datos", "especialidad" =>"1", "ciclo" =>"4"),
        array("codigo" =>378, "nombre" =>"Seguridad y alta disponibilidad", "especialidad" =>"1", "ciclo" =>"4"),

        array("codigo" =>483, "nombre" =>"Sistemas informáticos", "especialidad" =>"2", "ciclo" =>"5"),
        array("codigo" =>484, "nombre" =>"Bases de Datos", "especialidad" =>"1", "ciclo" =>"5"),
        array("codigo" =>485, "nombre" =>"Programación", "especialidad" =>"1", "ciclo" =>"5"),
        array("codigo" =>487, "nombre" =>"Entornos de desarrollo", "especialidad" =>"1", "ciclo" =>"5"),
        array("codigo" =>373, "nombre" =>"Lenguajes de marcas y sistemas de gestión de información", "especialidad" =>"1", "ciclo" =>"5"),
        array("codigo" =>486, "nombre" =>"Acceso a datos", "especialidad" =>"1", "ciclo" =>"5"),
        array("codigo" =>488, "nombre" =>"Desarrollo de interfaces", "especialidad" =>"2", "ciclo" =>"5"),
        array("codigo" =>489, "nombre" =>"Programación multimedia y dispositivos móviles", "especialidad" =>"1", "ciclo" =>"5"),
        array("codigo" =>490, "nombre" =>"Programación de servicios y procesos", "especialidad" =>"1", "ciclo" =>"5"),
        array("codigo" =>491, "nombre" =>"Sistemas de gestión empresarial", "especialidad" =>"2", "ciclo" =>"5"),

        array("codigo" =>483, "nombre" =>"Sistemas informáticos", "especialidad" =>"2", "ciclo" =>"6"),
        array("codigo" =>484, "nombre" =>"Bases de Datos", "especialidad" =>"1", "ciclo" =>"6"),
        array("codigo" =>485, "nombre" =>"Programación", "especialidad" =>"1", "ciclo" =>"6"),
        array("codigo" =>487, "nombre" =>"Entornos de desarrollo", "especialidad" =>"1", "ciclo" =>"6"),
        array("codigo" =>373, "nombre" =>"Lenguajes de marcas y sistemas de gestión de información", "especialidad" =>"1", "ciclo" =>"6"),
        array("codigo" =>612, "nombre" =>"Desarrollo web en entorno cliente", "especialidad" =>"2", "ciclo" =>"6"),
        array("codigo" =>613, "nombre" =>"Desarrollo web en entorno servidor", "especialidad" =>"1", "ciclo" =>"6"),
        array("codigo" =>614, "nombre" =>"Despliegue de aplicaciones web", "especialidad" =>"1", "ciclo" =>"6"),
        array("codigo" =>615, "nombre" =>"Diseño de interfaces web", "especialidad" =>"2", "ciclo" =>"6")
    ];

}
