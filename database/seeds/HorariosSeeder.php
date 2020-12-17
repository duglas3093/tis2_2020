<?php

use Illuminate\Database\Seeder;

class HorariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Horario::create([
            'horario_periodo'=>'6:45 - 8:15'
        ]);
        App\Horario::create([
            'horario_periodo'=>'8:15 - 9:45'
        ]);
        App\Horario::create([
            'horario_periodo'=>'9:45 - 11:15'
        ]);
        App\Horario::create([
            'horario_periodo'=>'11:15 - 12:45'
        ]);
        App\Horario::create([
            'horario_periodo'=>'12:45 - 14:15'
        ]);
        App\Horario::create([
            'horario_periodo'=>'14:15 - 15:45'
        ]);
        App\Horario::create([
            'horario_periodo'=>'15:45 - 17:15'
        ]);
        App\Horario::create([
            'horario_periodo'=>'17:15 - 18:45'
        ]);
        App\Horario::create([
            'horario_periodo'=>'18:45 - 20:15'
        ]);
        App\Horario::create([
            'horario_periodo'=>'20:15 - 21:45'
        ]);
    }
}
