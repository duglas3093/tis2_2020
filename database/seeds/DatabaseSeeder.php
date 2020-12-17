<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolSeeder::class);
        // $this->call(FacultadSeeder::class);
        $this->call(HorariosSeeder::class);
        // $this->call(UsersTableSeeder::class);
        App\User::create([
            'name' => 'Douglas',
            'last_name' => 'Quisbert Montalvo',
            'email'=> 'admin@mail.com',
            'password' => bcrypt('123456'),
            'user_phone'=>'60793636',
            'user_codsis'=>'200000001',
            'user_ci'=>'88888888',
            'user_nac'=>'21/10/2020',
            'rol_id'=>'1'
        ]);
        App\User::create([
            'name' => 'mario',
            'last_name' => 'test',
            'email'=> 'decano@mail.com',
            'password' => bcrypt('123456'),
            'user_phone'=>'60793636',
            'user_codsis'=>'200000002',
            'user_ci'=>'88888890',
            'user_nac'=>'21/10/2020',
            'rol_id'=>'2'
        ]);
        App\User::create([
            'name' => 'carlos',
            'last_name' => 'test',
            'email'=> 'dir_aca@mail.com',
            'password' => bcrypt('123456'),
            'user_phone'=>'60793636',
            'user_codsis'=>'200000003',
            'user_ci'=>'88888891',
            'user_nac'=>'21/10/2020',
            'rol_id'=>'3'
        ]);
        App\User::create([
            'name' => 'maria',
            'last_name' => 'test',
            'email'=> 'dir_dep@mail.com',
            'password' => bcrypt('123456'),
            'user_phone'=>'60793636',
            'user_codsis'=>'200000004',
            'user_ci'=>'88888892',
            'user_nac'=>'21/10/2020',
            'rol_id'=>'4'
        ]);
        App\User::create([
            'name' => 'juan',
            'last_name' => 'test',
            'email'=> 'docente@mail.com',
            'password' => bcrypt('123456'),
            'user_phone'=>'60793636',
            'user_codsis'=>'200000005',
            'user_ci'=>'88888895',
            'user_nac'=>'21/10/2020',
            'rol_id'=>'5'
        ]);
        App\User::create([
            'name' => 'alberto',
            'last_name' => 'test',
            'email'=> 'aux_docente@mail.com',
            'password' => bcrypt('123456'),
            'user_phone'=>'60793636',
            'user_codsis'=>'200000006',
            'user_ci'=>'88888896',
            'user_nac'=>'21/10/2020',
            'rol_id'=>'6'
        ]);
        App\User::create([
            'name' => 'pablo',
            'last_name' => 'test',
            'email'=> 'aux_laboratorio@mail.com',
            'password' => bcrypt('123456'),
            'user_phone'=>'60793636',
            'user_codsis'=>'200000007',
            'user_ci'=>'88888897',
            'user_nac'=>'21/10/2020',
            'rol_id'=>'7'
        ]);

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
