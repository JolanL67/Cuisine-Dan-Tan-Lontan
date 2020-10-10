<?php

namespace App\Http\Middleware;

use Closure;

class ApiAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*
        if ($request->header('x-requested-with') != 'XMLHttpRequest') {

            return response()->json([
                'status' => '403',
                'message' => "Vous n'avez pas le droit d'accés à cette ressource",
             ], 403);
        }
        */
        return $next($request);
    }
}
