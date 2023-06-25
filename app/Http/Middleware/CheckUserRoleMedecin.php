<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserRoleMedecin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role == 'medecin') {
            // L'utilisateur a le rôle d'admin, autoriser l'accès à la route
            return $next($request);
        }

        // L'utilisateur n'a pas le rôle d'admin, rediriger ou renvoyer une réponse d'erreur
        return redirect('/erreur')->with('error', 'Accès non autorisé');
    }
}
