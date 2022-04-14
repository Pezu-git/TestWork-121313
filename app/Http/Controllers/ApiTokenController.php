<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\User;

class ApiTokenController extends Controller
{
    /**
     * Update the authenticated user's API token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function createToken()
    {
        $user = User::all();
        $token = Str::random(20);
        $user[0]->remember_token = $token;
        $user[0]->save();
        return $user[0]->remember_token;
    }
}
