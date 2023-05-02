<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class ErrorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $errors = [
            [
                'maquina' => 1,
                'treballador' => 1,
                'estat_error' => 'Pendent',
                'descripcio' => "La velocitat de la màquina és massa elevada",
                'tipus' => 'Error de configuració',
                'created_at' => Carbon::now()
            ],
            [
                'maquina' => 2,
                'treballador' => 2,
                'estat_error' => 'Resolt',
                'descripcio' => "La taula de tall s'ha desviat de la posició correcta",
                'tipus' => 'Error mecànic',
                'created_at' => Carbon::now()
            ]
        ];

        DB::table('error')->insert($errors);
    }
}
