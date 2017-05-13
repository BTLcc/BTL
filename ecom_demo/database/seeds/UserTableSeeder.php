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
        //
        App\User::create(['name' => 'hai', 'email' => 'ngominh.hai96@gmail.com', 'password' => Hash::make('123456'), 'privilege' => 'admin']);
    }
}
