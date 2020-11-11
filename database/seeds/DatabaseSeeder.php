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
    }
}
