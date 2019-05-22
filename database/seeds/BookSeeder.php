<?php

use Illuminate\Database\Seeder;
use App\Model\Book;
use Faker\Factory as Faker;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('books')->truncate();

      $faker =Faker::create();

      foreach(range(1,30) as $i){
        Book::create([
       "title" => $faker->word(), 
       "author" => $faker->name(), 
       "owner_id"=>$faker->numberBetween($min = 1, $max = 20)
       ]);
      }
     
    }
}