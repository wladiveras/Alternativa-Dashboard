<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class AuthModerator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifica se o usuario está logado.
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Usuario
        if (Auth::user()->role == 1) {
            return redirect('/home');
        }

        // Supervisor
        if (Auth::user()->role == 2) {
            return redirect('/home');
        }

        // Juridico
        if (Auth::user()->role == 3) {
            return redirect('/home');
        }

        // Moderador
        if (Auth::user()->role == 4) {
            return $next($request);
        }

        // Administrador
        if (Auth::user()->role == 5) {
            return $next($request);
        }

        //Super usuario
        if (Auth::user()->role == 6) {
            return $next($request);
        }
    }
}
