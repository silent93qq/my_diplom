<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Татьяна Григорьевна',
            'email' => 'user@email.com',
            'avatar'=>'default.jpg',
            'dormitory_number' => 1,
            'password' => bcrypt('111111'),
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@email.com',
            'dormitory_number' => 2,
            'password' => bcrypt('111111'),
        ]);
    }
}
