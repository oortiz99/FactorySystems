<?php


namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Treballador;
use App\Models\Maquina;
use App\Models\Error;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    public function login(Request $request){

        $email = $request->input("email");
        $contrasenya = $request->input("contrasenya");
        
        $user = User::where('username', $email)->first();
        if (! $user || ! Hash::check($contrasenya, $user->password)) {
            return response()->json([
                'data' => null,
                'message' => "Credencials incorrectes"
    
            ], 401);
        }
        $token = $user->createToken('token')->plainTextToken;
        $treballador = $user->treballdor;
        return response()->json([
            'data' => true,
            'treballador' => $treballador,
            'token' => $token,
            'message' => "Username i contrasenya valids"

        ],200);
    }

    public function logout(){
        auth()->user()->tokens()->delete();
        return response()->json([
            'message' => "Sessió tancada"
        ], 200);
    }

}
