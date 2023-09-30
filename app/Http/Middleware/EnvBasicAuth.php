<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnvBasicAuth
{
    public function handle(Request $request, Closure $next)
    {
        $username = env('BASIC_AUTH_USERNAME');
        $password = env('BASIC_AUTH_PASSWORD');

        if ($request->getUser() !== $username || $request->getPassword() !== $password) {
            $headers = ['WWW-Authenticate' => 'Basic'];
            return response('Unauthorized', 401, $headers);
        }

        return $next($request);
    }
}

