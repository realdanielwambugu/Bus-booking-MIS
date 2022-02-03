<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Route;

class RoutesController extends Controller
{
    use \App\Traits\HasValidation;

    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'route'))
        {
            return $error;
        }

        Route::create($request->all());

        return $response->withSuccess('Route Added Successfully');
    }

    public function show(Request $request, Response $response)
    {
        return $response->withView('admin/routes', ['routes' => Route::all()]);
    }

    public function delete(Request $request, Response $response)
    {
        Route::find($request->id)->delete();

        return $response->withRedirect('/routes');
    }
}
