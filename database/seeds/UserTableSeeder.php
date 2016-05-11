<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array('name' => 'Brian Johnson', 'email' => 'user1@gmail.com', 'password'=>Hash::make('secret') ));
        DB::table('users')->insert(array('name' => 'Mick Jagger', 'email' => 'user2@gmail.com', 'password'=>Hash::make('secret') ));
        DB::table('users')->insert(array('name' => 'Jim Morrison', 'email' => 'user3@gmail.com', 'password'=>Hash::make('secret') ));
        DB::table('users')->insert(array('name' => 'Bruce Dickinson', 'email' => 'user4@gmail.com', 'password'=>Hash::make('secret') ));
        DB::table('users')->insert(array('name' => 'Mike Patton', 'email' => 'user5@gmail.com', 'password'=>Hash::make('secret') ));
        DB::table('users')->insert(array('name' => 'Bob Dylan', 'email' => 'user6@gmail.com', 'password'=>Hash::make('secret') ));

    }
}

