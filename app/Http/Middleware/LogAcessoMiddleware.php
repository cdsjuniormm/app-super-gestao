<?php

namespace App\Http\Middleware;

use App\LogAcesso;
use Closure;

class LogAcessoMiddleware
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
        LogAcesso::create([
            'ip' => $request->server->get('REMOTE_ADDR'),
            'uri' => $request->getRequestUri(),
        ]);

        return $next($request);
    }
}
