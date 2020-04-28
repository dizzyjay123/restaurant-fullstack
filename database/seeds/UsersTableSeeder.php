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
            'fname' => 'Emmanuel',
            'lname' => 'Dizzy',
            'email' => 'dizzy@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'fname' => 'jake',
            'lname' => 'blay',
            'email' => 'jake@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
