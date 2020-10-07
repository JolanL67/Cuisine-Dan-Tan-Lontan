<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Providers\SmsStatusCodeProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SmsController extends Controller
{
    public function send(Request $req) {

        $user = env("FREE_USER");
        $pass = env("FREE_PASS");
        $data = $req->json()->all();

        foreach ($data as $item) {
            if ($item == null || empty($item)) {

                return response([
                    "status" => 400,
                    "message" => "Tout les champs n'ont pas été renseignés !"
                ], 400);
            };
        }

        $firstName = $data['firstName'];
        $name = $data['name'];
        $adress = $data['adress'];
        $mail = $data['mail'];
        $phone = $data['phone'];
        $smsMessage = $data['message'];
        $total = $data['total'];

        $dataCommand = $data['shortCart'];
        $command = null;

        foreach ($dataCommand as $item) {

            $command .= $item . "\n";
        }

        $message = "PRENOM : {$firstName}

NOM : {$name}

ADRESSE POSTALE : {$adress}

E-MAIL : {$mail}

TELEPHONE : {$phone}

MESSAGE : {$smsMessage}

COMMANDE : {$command}

TOTAL : {$total}";

        $response = Http::post('https://smsapi.free-mobile.fr/sendmsg', [
            'user' => $user,
            'pass' => $pass,
            'msg' => $message,
        ]);


        $responseStatusCode = $response->status();

        return SmsStatusCodeProvider::getStatusMessages($responseStatusCode);
    }
}
