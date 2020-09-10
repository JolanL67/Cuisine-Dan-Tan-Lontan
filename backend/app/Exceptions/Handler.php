<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        $path = explode('/', strtolower($request->path()));
        $statusCode = $exception->getStatusCode();

        if ($path[0] == "api" && $statusCode == 405) {
            return response()->json([
                'status' => '405',
                'message' => "La méthode utilisée pour la requête n'est pas supportée par la ressource ciblée.",
             ], 405);
        }
        
        if ( $path[0] == "api" && $statusCode == 404) {
            return response()->json([
                'status' => '404',
                'message' => "La ressource demandée n'existe pas.",
             ], 404);
        };

        return parent::render($request, $exception);
    }
}
