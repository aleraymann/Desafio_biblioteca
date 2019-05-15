<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert(
       ["name"=>"Xenos Sutton","email"=>"dolor.dapibus@tincidunt.org","password"=>"MIA76LFY9ES"
       ]);
      DB::table('users')->insert(
        ["name"=>"Rose Head","email"=>"sed.dui.Fusce@adipiscing.co.uk","password"=>"NKN20KSD1JF"
        ]);
      DB::table('users')->insert(
        ["name"=>"Amal Talley","email"=>"eu.turpis.Nulla@Crasegetnisi.net","password"=>"YTJ62EVS6AU"
        ]);
      DB::table('users')->insert(
        ["name"=>"Allen Herman","email"=>"erat.eget.ipsum@Sedneque.com","password"=>"IMP11WEW4YV"
        ]);
      DB::table('users')->insert(
        ["name"=>"Abigail Cobb","email"=>"nec.luctus.felis@pharetra.com","password"=>"BDB94OGN4ST"
        ]);
      DB::table('users')->insert(
        ["name"=>"Kevin Lott","email"=>"pellentesque@ametrisus.ca","password"=>"BAF32MVO8QP"
        ]);
      DB::table('users')->insert(
        ["name"=>"Chandler Harrington","email"=>"Sed.id.risus@sollicitudin.co.uk","password"=>"CXG55WPA2LG"
        ]);
      DB::table('users')->insert(
        ["name"=>"Dennis Cotton","email"=>"iaculis@acmieleifend.co.uk","password"=>"TWK98FXE9LF"
        ]);
      DB::table('users')->insert(
        ["name"=>"Nicole Mason","email"=>"nunc.sed.libero@inmagna.org","password"=>"MVW56CNK8GV"
        ]);
      DB::table('users')->insert(
        ["name"=>"Adele Barnes","email"=>"porttitor@pellentesque.ca","password"=>"SIR84VSV0NB"
        ]);
    }
}