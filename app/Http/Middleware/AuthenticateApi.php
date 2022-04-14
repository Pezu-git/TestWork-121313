<?php

namespace App\Http\Middleware;

use App\Models\User;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthenticateApi extends Middleware
{
    protected function authenticate($request, array $guards)
    {
        $token = $request->query('token');
        if (empty($token)) {
            $token = $request->bearerToken();
        }
        if (empty($token)) {
            $token = $request->input('token');
        }
        $user = User::where('remember_token', $token)->first();
        if ($user) {
            return;
        }
        $this->unauthenticated($request, $guards);
    }
}
