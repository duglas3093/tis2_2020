<?php

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Rol::create([
            'rol_name'=>'Administrador',
            'rol_description'=>'Admin del sistema'
        ]);
        App\Rol::create([
            'rol_name'=>'Decano',
            'rol_description'=>'Encargado de una Facultad'
        ]);
        App\Rol::create([
            'rol_name'=>'Director Departamento',
            'rol_description'=>'Director de un departamento'
        ]);
        App\Rol::create([
            'rol_name'=>'Director Académico',
            'rol_description'=>'Director academico'
        ]);
        App\Rol::create([
            'rol_name'=>'Docente',
            'rol_description'=>'Docente de una materia'
        ]);
        App\Rol::create([
            'rol_name'=>'Aux. Docente',
            'rol_description'=>'Estudiante a cargo de una materia impartida por un docente'
        ]);
        App\Rol::create([
            'rol_name'=>'Aux. Laboratorio',
            'rol_description'=>'Estudiante a cargo de los laboratorios de una carrera'
        ]);
    }
}
