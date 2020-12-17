<?php

use Illuminate\Database\Seeder;

class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Facultad::create([
            'facultad_nombre'=>'Facultad de ciencias y tecnologia'
        ]);
        App\Facultad::create([
            'facultad_nombre'=>'Facultad de Medicina'
        ]);
        App\Facultad::create([
            'facultad_nombre'=>'Facultad de Ciencias Economicas'
        ]);
        App\Facultad::create([
            'facultad_nombre'=>'Facultad de sociologia'
        ]);
        App\Facultad::create([
            'facultad_nombre'=>'Facultad de ciencias juridicas y politicas'
        ]);
    }
}
