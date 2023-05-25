<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use App\Models\Maquina;

class MaquinesController extends Controller
{
    //
    public function registrarMaquina(Request $request){
        $rules = [
            "nom"=> "required",
            "descripcio" => "nullable",
            "model" => "required",
            "num_serie" => "required",
            "planta" => "required|numeric",
            "ubicacio" => "required|numeric",
            "estat" => "required|numeric"
        ];
    
        try {
            //code...
            $validator = Validator::make($request->all(), $rules);
    
            $maquina = new Maquina;
            $maquina->nom = $request->input("nom");
            $maquina->descripcio = $request->input("descripcio");
            $maquina->model = $request->input("model");
            $maquina->num_serie = $request->input("num_serie");
            $maquina->planta = $request->input("planta");
            $maquina->ubicacio = $request->input("ubicacio");
            $maquina->estat = $request->input("estat");
            $maquina->save();
    
            return response()->json([
                'message' => "S'ha registrat la maquina correctament"
            ], 200);

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            if ($validator->fails()) {
                return response()->json([
                    'message' => "Error en validar els parametres",
                    'errors' => $validator->errors()
                ], 400);
            }else{
                return response()->json([
                    "message" => "S'ha produït un error en processar les dades",
                    "errors" => $e->getMessage()
                ],500);
            }
        }
    }

    public function getMaquinesPerPlanta(Request $request){

        $maquines_p1 = Maquina::where('planta', 1)->get();
        $maquines_p2 = Maquina::where('planta', 2)->get();
        $maquines_p3 = Maquina::where('planta', 3)->get();
        return response()->json([
            'data' => [
                'planta_1' => $maquines_p1,
                'planta_2' => $maquines_p2,
                'planta_3' => $maquines_p3,
            ]
        ],200);
        

    }
}
