<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Fpdf\Fpdf;
use App\Models\Recanvis;


class RecanvisController extends Controller
{
    //
    public function index(){
        return view("panel/recanvis");
    }

    public function demanar(Request $request){
        $data = $request->input("data");
        

        DB::beginTransaction();
        try {
            foreach ($data as $item) {
                $id = $item["id"];
                $qt = $item["qt"];
                $producto = Recanvis::find($id);
                $producto->update(['quantitat'=> $producto->quantitat -  $qt]);
            }
            DB::commit();
            // $controller = new RecanvisController();

            // // Crear una instancia del objeto Request con los datos necesarios
            // $request = Request::create('/enviarMailRecanvis', 'GET',$data);
            // $request->headers->set('Accept', 'application/json');
            // $response = $controller->enviarMailRecanvis($request);
            // $mail = json_decode($response->getContent(), true);

        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                "message" => "Error en enviar articles",
                "errors" => $e->getMessage()
            ],501);
        }

        return response()->json([
            "data" => true,
            "message" => "S'ha demanat els recanvis correctament! revisa el teu correu"
        ],200);
    }

}
