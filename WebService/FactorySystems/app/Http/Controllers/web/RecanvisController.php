<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Fpdf\Fpdf;


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
                $producto = Recanvi::findOrFail($id);
                $producto->decrement('quantitat', $qt);
                $producto->save();
            }
            DB::commit();
            $controller = new RecanvisController();

            // Crear una instancia del objeto Request con los datos necesarios
            $request = Request::create('/enviarMailRecanvis', 'GET',$data);
            $request->headers->set('Accept', 'application/json');
            $response = $controller->enviarMailRecanvis($request);
            $mail = json_decode($response->getContent(), true);

        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                "message" => "articles enviats! revisa el teu correu",
                "errors" => $e->getMessage()
            ],401);
        }

        return response()->json([
            "data" => $articles,
            "message" => "articles enviats! revisa el teu correu"
        ],200);
    }

}
