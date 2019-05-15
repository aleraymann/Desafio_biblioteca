<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('books')->insert(
       ["title"=>"non, lacinia","author"=>"Jimenez, Rebekah G.","id_user"=>10
       ]);
      DB::table('books')->insert(
        ["title"=>"parturient montes,","author"=>"Joseph, Phoebe R.","id_user"=>4
        ]);
      DB::table('books')->insert(
        ["title"=>"diam dictum","author"=>"Walsh, Deacon Y.","id_user"=>5
        ]);
      DB::table('books')->insert(
        ["title"=>"dolor. Donec","author"=>"Perez, Alana Y.","id_user"=>3
        ]);
      DB::table('books')->insert(
        ["title"=>"ipsum. Curabitur","author"=>"Pierce, Julian O.","id_user"=>5
        ]);
      DB::table('books')->insert(
        ["title"=>"Cras vehicula","author"=>"Hall, Ivan X.","id_user"=>9
        ]);
      DB::table('books')->insert(
        ["title"=>"sociis natoque","author"=>"Hicks, Graham P.","id_user"=>6
        ]);
      DB::table('books')->insert(
        ["title"=>"ullamcorper, nisl","author"=>"Fernandez, Shelby F.","id_user"=>2
        ]);
      DB::table('books')->insert(
        ["title"=>"risus. Quisque","author"=>"Farley, Uriah Y.","id_user"=>3
        ]);
      DB::table('books')->insert(
        ["title"=>"semper tellus","author"=>"Solomon, Aladdin H.","id_user"=>5
        ]);
      DB::table('books')->insert(
        ["title"=>"mauris. Morbi","author"=>"Melendez, Brooke E.","id_user"=>1
        ]);
      DB::table('books')->insert(
        ["title"=>"mus. Proin","author"=>"Bowers, Brielle I.","id_user"=>2
        ]);
      DB::table('books')->insert(
        ["title"=>"Sed nunc","author"=>"Wynn, Joan Y.","id_user"=>7
        ]);
      DB::table('books')->insert(
        ["title"=>"dapibus gravida.","author"=>"Silva, Magee P.","id_user"=>1
        ]);
      DB::table('books')->insert(
        ["title"=>"sem molestie","author"=>"Stephens, Wendy H.","id_user"=>3
        ]);
      DB::table('books')->insert(
        ["title"=>"Cras eu","author"=>"Bennett, Hanae N.","id_user"=>6
        ]);
      DB::table('books')->insert(
        ["title"=>"Aliquam tincidunt,","author"=>"Lee, Nolan Z.","id_user"=>3
        ]);
      DB::table('books')->insert(
        ["title"=>"tristique pharetra.","author"=>"Sanchez, Honorato U.","id_user"=>5
        ]);
      DB::table('books')->insert(
        ["title"=>"scelerisque, lorem","author"=>"Short, Burton C.","id_user"=>1
        ]);
      DB::table('books')->insert(
        ["title"=>"lorem. Donec","author"=>"Holloway, Camilla V.","id_user"=>10
        ]);
    }
}