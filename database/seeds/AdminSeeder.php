<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\User::Insert(
        [
          'name' => 'Admin',
          'email' => 'admin@demo.com',
          'password' => Hash::make('password'),
        ]);

        
        \App\Client::Insert(
        [
          'name' => 'Client',
          'email' => 'client@demo.com',
          'password' => Hash::make('password'),
        ]);




      //factory('App\RawMeterials', 25)->create();
      //factory('App\Stock', 25)->create();

      //  factory('App\Recipe', 15)->create();
      //  factory('App\Material', 15)->create();
      
      factory('App\User', 25)->create();
      //factory('App\Client', 25)->create();

      //menu


        \App\Menu::Insert(['name' => 'breakfast']);
        \App\Menu::Insert(['name' => 'diner']);
        \App\Menu::Insert(['name' => 'abc']);



    }


}
