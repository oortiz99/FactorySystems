<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            ['id_treballador'=> 1,'username' => 'jperez', 'name' => 'Juan','email' => 'jperez@gmail.com','password' =>  Hash::make('jperez')],
            ['id_treballador'=> 2,'username' => 'mgarcia','name' => 'Maria', 'email' => 'mgarcia@gmail.com','password' =>  Hash::make('mgarcia')],
            ['id_treballador'=> 3,'username' => 'aeharrak', 'name' => 'Abdel','email' => 'aeharrak@gmail.com','password' =>  Hash::make('aeharrak')],
            ['id_treballador'=> 4,'username' => 'pgarcia', 'name' => 'Pol','email' => 'pgarcia@gmail.com','password' =>  Hash::make('pgarcia')],
           
            
        ]);
    }
}
