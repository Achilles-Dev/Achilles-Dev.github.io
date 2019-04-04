<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<3; $i++){
            User::create([
                'name' => str_random(8),
                'email' => str_random(12).'@gmail.com',
                'password' => bcrypt('123456')
            ]);
        }
    }
}
