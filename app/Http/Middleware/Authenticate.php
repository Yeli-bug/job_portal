<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     * Si el usuario inicia sesion sin acceso directo a estas pgs de perfil, middleware te redirecciona a iniciar sesion
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('account.login');
    }
}
