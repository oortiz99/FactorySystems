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

        // $mail = new PHPMailer();
        // $mail->IsSMTP();
        // $mail->CharSet="UTF-8";
        // $mail->SMTPSecure = 'ssl';
        // $mail->Host = 'smtp.gmail.com';
        // $mail->Port = 465;
        // $mail->Username = 'pracciproba@gmail.com';
        // $mail->Password = 'wbfoqvlpyzekxwrs';
        // $mail->SMTPAuth = true;
        // $mail->SMTPDebug = 0;
        
        // $mail->SetFrom('pracciproba@gmail.com','ProductToken');
        // $mail->AddAddress($email);
        
        // $mail->IsHTML(true);
        // $mail->Subject = "Utilització del token";
        // $mail->AltBody = "Token";
        // $mail->Body = "Has utilitzat el teu token, Obre el pdf per veure mes informació";
        // $mail->addStringAttachment($pdfString, 'archivo.pdf');
        
        // if(!$mail->send()) {

        //         return response()->json([
        //             'data' => null,
        //             'message' =>"<div class='alert alert-danger' role='alert'>
        //                             Error al enviar el correo electrónico: " . $mail->ErrorInfo
        //                         ."</div>"
        
        //         ], 401);
        // } else {
        //         return response()->json([
        //             'data' => true,
        //             'message' =>"<div class='alert alert-success' role='alert'>
        //                             El correo electrónico ha sido enviado con éxito.
        //                         </div>"
        
        //         ], 200);
        // }  
    }

}
