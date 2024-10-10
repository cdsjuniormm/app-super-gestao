<?php

namespace App\Http\Middleware;

use Closure;

class AuthMiddleware
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
        session_start();

        if (
            !empty($_SESSION['user_id'])
            && !empty($_SESSION['user_name'])
        ) {
            return $next($request);
        }

        return redirect()->route('site.login', [
            'msgErro' => 'Faça o login para acessar.'
        ]);
    }
}
