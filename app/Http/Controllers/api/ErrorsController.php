<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Maquina;
use App\Models\Error;
use App\Models\User;
use App\Models\Historial;
use Carbon\Carbon;

class ErrorsController extends Controller
{
    //
    public function reportarError(Request $request){
        $rules = [
            "maquina"=> "required|numeric",
            "treballador" => "required|numeric",
            "estat_error" => "required",
            "descripcio" => "nullable",
            "tipus" => "required",
        ];
    
        $validator = Validator::make($request->all(), $rules);
    
        if ($validator->fails()) {
            return response()->json([
                'message' => "Error en validar els parametres",
                'errors' => $validator->errors()
            ], 400);
        }

        $error = new Error;
        $error->maquina = $request->input("maquina");
        $error->treballador = $request->input("treballador");
        $error->estat_error = $request->input("estat_error");
        $error->descripcio = $request->input("descripcio");
        $error->tipus = $request->input("tipus");
        $error->created_at = Carbon::now('Europe/Madrid');
        $error->save();

        $maquina = Maquina::find($request->input("maquina"));
        if($request->input("estat_error") == "Pendent"){
            $maquina->estat = 0;
        }else if($request->input("estat_error") == "Resolt"){
            $maquina->estat = 1;
        }

        $maquina->save();

        $historial = new Historial;
        $historial->maquina = $request->input("maquina");
        $historial->descripcio = $request->input("descripcio");
        $historial->tipus = $request->input("tipus");
        $historial->estat_error = $request->input("estat_error");
        $historial->created_at = Carbon::now('Europe/Madrid');
        $historial->save();


        return response()->json([
            'message' => "S'ha reportat l'error correctament"
        ], 200);

    }

    public function canviarEstat(Request $request){
        $rules = [
            "id_error"=> "required|numeric",
            "estat_nou" => "required|string",
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'message' => "Error en validar els parametres",
                'errors' => $validator->errors()
            ], 400);
        }
        
        try {
            $estat_nou = $request->input('id_error');
            $error = Error::find($request->input('id_error'));
            $id_maquina = $error->maquina;
            $error->estat_error = $request->input('estat_nou');
            $error->save();

            $maquina = Maquina::find($id_maquina);
            if($estat_nou == "Pendent"){
                $maquina->estat = 0;
            }else if($estat_nou == "Resolt"){
                $maquina->estat = 1;
            }

            $maquina->save();

            return response()->json([
                'message' => "S'ha actualitzat l'estat d'error correctament",
                'id_maquina' => $id_maquina
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                "message" => "S'ha produït un error en canviar estat",
                "errors" => $e->getMessage()
            ],500);
        }
    
    }

    public function getErrorsJoin(){
        $errors = Error::getErrorsJoin();

        return response()->json([
            'data' => $errors,
            'message' => "Historials obtinguts "
        ], 200);

    }


}

