<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Treballador;
use App\Models\Maquina;
use App\Models\Error;

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
            'data' => $treballadors,
            'message' => "Success"

        ], 401);
    }
    public function getErrors(){
        $errors = Error::all();
        return response()->json([
            'data' => $errors,
            'message' => "Success"

        ], 401);
    }
    public function getMaquinas(){
        $maquina = Maquina::all();
        return response()->json([
            'data' => $maquina,
            'message' => "Success"

        ], 401);
    }



}
