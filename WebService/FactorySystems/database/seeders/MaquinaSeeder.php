<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaquinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('maquina')->insert([
            ['nom' => 'Maquina 1', 'descripcio' => 'Descripció de la màquina 1'],
            ['nom' => 'Maquina 2', 'descripcio' => 'Descripció de la màquina 2'],
            ['nom' => 'Maquina 3', 'descripcio' => 'Descripció de la màquina 3'],
            ['nom' => 'Maquina 4', 'descripcio' => 'Descripció de la màquina 4'],
        ]);
    }
}
