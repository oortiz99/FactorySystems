<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Historial;

class HistorialController extends Controller
{
    //

    public function getHistorialErrors(){
        $historial = Historial::getHistorialJoin();

        return response()->json([
            'data' => $historial,
            'message' => "Historials obtinguts "
        ], 200);

    }
}
