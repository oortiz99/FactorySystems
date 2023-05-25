<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Controllers\api\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FactorySystemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
    }

    public function validarLogin(Request $request){
        $data = array('email' =>$request->input('usr-email'),'contrasenya' => $request->input('usr-contrasenya'));
        $controller = new LoginController();

        // Crear una instancia del objeto Request con los datos necesarios
        $request = Request::create('/login', 'POST', $data);
        $request->headers->set('Accept', 'application/json');
        // Llamar al método del controlador y pasarle la solicitud
        $response = $controller->login($request);
        $data = json_decode($response->getContent(), true); 
        if ($data["data"]){
            return redirect('inici');
        }
        return view('index');
    }
}
