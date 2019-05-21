<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->truncate();

      $faker =Faker::create();

      foreach(range(1,30) as $i){
        User::create([
       "name" => $faker->name(), 
       "email" => $faker->email(), 
       "password"=>bcrypt($faker->word())
       ]);
      }
     
    }
}