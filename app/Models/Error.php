<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Treballador;
use App\Models\Maquina;

class Error extends Model
{
    use HasFactory;
    public $table = "error";

    protected $fillable = [
        'maquina',
        'treballador',
        'estat_error',
        'descripcio',
        'tipus',
        'created_at',

    ];

    public function getErrors(){
        $users = DB::table("error")
            ->orderBy('created_at', 'desc')
            ->get();

        return $users;
    }

    
    public function getErrorsJoin(){
        
        $resultado = DB::table('error')
                ->join('maquina', 'error.maquina', '=', 'maquina.id')
                ->select('error.*', 'maquina.nom','maquina.num_serie','maquina.planta','maquina.ubicacio')
                ->orderBy('created_at','desc')
                ->get();
        
        $obj = collect($resultado)->map(function ($item) {
            return (object) $item;
        });

        return $obj;
    }
    // public function maquina()
    // {
    //     return $this->belongsTo(Maquina::class,'id','maquina');
    // }

}
