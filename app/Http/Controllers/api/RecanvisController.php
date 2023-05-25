<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Recanvis;
use Illuminate\Support\Facades\DB;

class RecanvisController extends Controller
{
    //
    public function getRecanvis(){
        try {
            $recanvis = Recanvis::all();
            return response()->json([
                "data" => $recanvis,
                "message" => "Recanvis obtinguts"
            ],200);
        } catch (\Exception $e) {
            return response()->json([
                "data" => null,
                "message" => $e->getMessage()
            ],401);
        }

    }

    public function buscarRecanvi(Request $request){
        try {
            $rules = [
                "subcadena"=> "required|string",
            ];
            $validator = Validator::make($request->all(), $rules);

            $recanvis = Recanvis::where('nom', 'LIKE', '%' . $request->input("subcadena"). '%')->orderBy('nom', 'asc')->get();
            return response()->json([
                "data" => $recanvis,
                "message" => count($recanvis) . " recanvi/s obtingut/s"
            ],200);
        } catch (\Exception $e) {
            return response()->json([
                "data" => null,
                "message" => $e->getMessage()
            ],401);
        }
    }

    public function enviarMailRecanvis(Request $request){

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->CharSet="UTF-8";
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->Username = 'pracciproba@gmail.com';
        $mail->Password = 'wbfoqvlpyzekxwrs';
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0;
        
        $mail->SetFrom('pracciproba@gmail.com','ProductToken');
        $mail->AddAddress($email);
        
        $mail->IsHTML(true);
        $mail->Subject = "Recanvis per demanar";
        $mail->AltBody = "Recanvis";
        $mail->Body = "<table class='table'>
        <thead>
          <tr>
            <th scope='col'>#</th>
            <th scope='col'>First</th>
            <th scope='col'>Last</th>
            <th scope='col'>Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope='row'>1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope='row'>2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope='row'>3</th>
            <td colspan='2'>arry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>";    
        
        if(!$mail->send()) {

                return response()->json([
                    'data' => null,
                    'message' =>"
                                    Error al enviar el correo electrónico: " . $mail->ErrorInfo
                                
        
                ], 401);
        } else {
                return response()->json([
                    'data' => true,
                    'message' =>"
                                    El correo electrónico ha sido enviado con éxito.
                               "
        
                ], 200);
        }  
    }

}
