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
        App\User::create([
            'name' => 'admin',
        	'password' => bcrypt('Cygnite@2019'),
        	'email' => 'admin@cygnite.com',
        ]);
    }
}
