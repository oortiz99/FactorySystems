<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Historial extends Model
{
    use HasFactory;
    public $table = "historial_errors";

    protected $fillable = [
        'maquina',
        'descripcio',
        'tipus',
        'created_at',
        'estat_error',
        'created_at'

    ];


    public function getHistorialJoin(){
        
        $resultado = DB::table('historial_errors')
                ->join('maquina', 'historial_errors.maquina', '=', 'maquina.id')
                ->select('historial_errors.*', 'maquina.nom','maquina.num_serie','maquina.planta','maquina.ubicacio')
                ->orderBy('created_at','desc')
                ->get();
        
        $obj = collect($resultado)->map(function ($item) {
            return (object) $item;
        });

        return $obj;
    }
}
