<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SmsStatusCodeProvider extends ServiceProvider
{

    public const STATUS_CODE = [
        200,
        400,
        402,
        403,
        500
    ];

    public const STATUS_CODES_MESSAGES = [
        "Le SMS a été envoyé sur votre mobile.",
        "Un des paramètres obligatoires est manquant.",
        "Trop de SMS ont été envoyés en trop peu de temps.",
        "Le service n'est pas activé sur l'espace abonné, ou login / clé incorrect.",
        "Erreur côté serveur. Veuillez réessayer ultérieurement."
    ];

    public static function getStatusMessages($responseStatusCode) {

        foreach( self::STATUS_CODE as $index => $statusCode) {

            if ( $statusCode == $responseStatusCode) {
                return [
                    "status" => $statusCode,
                    "message" => self::STATUS_CODES_MESSAGES[$index]
                ];
            }

        }

        return [
            "status" => 500,
            "message" => "Un code de statut inconnu du serveur à été envoyé par l'api de free"
        ];
    }
}
