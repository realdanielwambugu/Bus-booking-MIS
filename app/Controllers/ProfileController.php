<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Auth;

use App\Models\User;

class ProfileController
{
    public function show(Request $request, Response $response)
    {
        if (Auth::user()->isAdmin())
        {
            return $response->withView('admin/users', ['users' => User::all()]);
        }

        return $response->withView('passanger/profile', ['user' => Auth::user()]);
    }

}
