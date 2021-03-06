<?php
use Carbon\Carbon;
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
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('users')->insert([
            'fname' => 'jake',
            'lname' => 'blay',
            'email' => 'jake@gmail.com',
            'password' => Hash::make('12345678'),
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);
    }
}
