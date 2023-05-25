<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TreballadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('treballador')->insert([
            ['nom' => 'Joan', 'cognoms' => 'Perez','username' => 'jperez','contrasenya' =>  Hash::make('jperez'), 'rol' => 'Operari', 'data_incorporacio' => '2020-01-01'],
            ['nom' => 'Maria', 'cognoms' => 'Garcia', 'username' => 'mgarcia','contrasenya' =>  Hash::make('mgarcia'),'rol' => 'Supervisor', 'data_incorporacio' => '2019-05-01'],
            ['nom' => 'Abdel', 'cognoms' => 'El Harrak', 'username' => 'aeharrak','contrasenya' =>  Hash::make('aelharra'),'rol' => 'Operari', 'data_incorporacio' => '2021-04-01'],
            ['nom' => 'Pol', 'cognoms' => 'Garcia', 'username' => 'pgarcia','contrasenya' =>  Hash::make('pgarcia'),'rol' => 'Operari', 'data_incorporacio' => '2018-05-05'],
        ]);
    }
}
