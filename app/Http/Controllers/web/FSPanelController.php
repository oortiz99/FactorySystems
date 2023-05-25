<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\api\FactorySystemsAPIController;
use App\Http\Controllers\api\MaquinesController;
use App\Http\Controllers\api\RecanvisController;
use App\Http\Controllers\api\HistorialController;
use App\Http\Controllers\api\ErrorsController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Client\Factory as HttpClient;
use Illuminate\Support\Facades\Session;

class FSPanelController extends Controller
{
    //
    public function inici(){

        $controller = new FactorySystemsAPIController();
        // Crear una instancia del objeto Request con los datos necesarios
        $request = Request::create('/getMaquinas', 'GET');
        $request->headers->set('Accept', 'application/json');
        // Llamar al método del controlador y pasarle la solicitud
        $response = $controller->getMaquinas($request);
        $maquines = json_decode($response->getContent(), true);
        // $usuario = Auth::user();
        // var_dump($usuario);
        // exit;

        return view('panel/inici',array(
            'maquines' => $maquines["data"]
        ));
    }

    public function visualitzar(){
        $controller = new MaquinesController();

        // Crear una instancia del objeto Request con los datos necesarios
        $request = Request::create('/getMaquinesPerPlanta', 'GET');
        $request->headers->set('Accept', 'application/json');
        // Llamar al método del controlador y pasarle la solicitud
        $response = $controller->getMaquinesPerPlanta($request);
        $data = json_decode($response->getContent(), true);
        //getErrors
        $request_errors = Request::create('/getErrors', 'GET');
        $request_errors->headers->set('Accept', 'application/json');
        // Llamar al método del controlador y pasarle la solicitud
        $controller_errr = new ErrorsController();
        $response_errors =  $controller_errr->getErrorsJoin($request);
        $errors = json_decode($response_errors->getContent(), true);
        return view('panel/visualitzar',array(
            'maquines' => $data["data"],
            'errors' => $errors["data"]
        ));
    }

    public function registrarMaquina(Request $request){

        if($request->input('validar') != null){
            $nom = $request->input('m-nom');
            $model = $request->input('m-model');
            $num_serie = $request->input('m-serie');
            $planta = $request->input('m-planta');
            $ubicacio = $request->input('m-ubicacio');
            $estat = $request->input('m-estat');

            $data = array(
                "nom"=> $nom,
                "descripcio" => "",
                "model" => $model,
                "num_serie" => $num_serie,
                "planta" => intval($planta),
                "ubicacio" => intval($ubicacio),
                "estat" => intval($estat)
            );
            $controller = new MaquinesController;
    
            // Crear una instancia del objeto Request con los datos necesarios
            $request = Request::create('/registrarMaquina', 'POST', $data);
            $request->headers->set('Accept', 'application/json');
            // Llamar al método del controlador y pasarle la solicitud
            $response = $controller->registrarMaquina($request);
            $data = json_decode($response->getContent(), true); 
            if ($response->status() == 200) {
                // Procesar los datos y realizar acciones
                return redirect()->route('registrarMaquina')->with('success', $data["message"]);
            } else {
                return redirect()->back()->withErrors("No s'ha pogut registrar la maquina.");
            }
        }
        
        return view('panel/registrar-maquina');
    }


    public function historial(){
        $controller = new HistorialController();


        // Crear una instancia del objeto Request con los datos necesarios
        $request = Request::create('/getHistorialErrors', 'GET');
        $request->headers->set('Accept', 'application/json');
        $response = $controller->getHistorialErrors($request);
        $historial = json_decode($response->getContent(), true);

        return view('panel/historial',array(
            'historial' => $historial["data"]
        ));
    }

    public function recanvis(){
        $controller = new RecanvisController();

        // Crear una instancia del objeto Request con los datos necesarios
        $request = Request::create('/getRecanvis', 'GET');
        $request->headers->set('Accept', 'application/json');
        $response = $controller->getRecanvis($request);
        $recanvis = json_decode($response->getContent(), true);
        return view("panel/recanvis",array(
            "recanvis" => $recanvis["data"]
        ));
    }    
}
