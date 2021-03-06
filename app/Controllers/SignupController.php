<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Hash;

use App\Models\User;

class SignupController extends Controller
{
    use \App\Traits\HasValidation;

    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'signup'))
        {
            return $error;
        }

        $request->post->set('password', Hash::make($request->password));

        User::create($request->except('confirmPassword'));

        return $response->withAjaxRedirect('/signin');
    }

}
