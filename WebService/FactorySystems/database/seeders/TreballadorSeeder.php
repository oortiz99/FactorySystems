<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
            ['nom' => 'Joan', 'cognoms' => 'Perez', 'rol' => 'Operari', 'data_incorporacio' => '2020-01-01'],
            ['nom' => 'Maria', 'cognoms' => 'Garcia', 'rol' => 'Supervisor', 'data_incorporacio' => '2019-05-01'],
            ['nom' => 'Abdel', 'cognoms' => 'El Harrak', 'rol' => 'Operari', 'data_incorporacio' => '2021-04-01'],
            ['nom' => 'Pol', 'cognoms' => 'Garcia', 'rol' => 'Operari', 'data_incorporacio' => '2018-05-05'],
        ]);
    }
}
