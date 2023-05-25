<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Treballador;
use App\Models\Maquina;
use App\Models\Error;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class FactorySystemsAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getTreballadors(){
        $treballadors = Treballador::all();
        return response()->json([
            'data' => $treballadors

        ],200);
    }
    public function getErrors(){
        $errors = Error::getErrors();
        if(count($errors) ==0){
            return response()->json([
                'data' => $errors,
                'message' => "No s'ha trobat cap error"
            ],200);
        }
        return response()->json([
            'data' => $errors,
            'message' => count($errors) . " errors trobats"
        ],200);
    }
    public function getMaquinas(){
        $maquina = Maquina::all();
        return response()->json([
            'data' => $maquina
        ],200);
    }



}
