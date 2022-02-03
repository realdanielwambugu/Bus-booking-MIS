<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Vehicle;

class VehiclesController extends Controller
{
    use \App\Traits\HasValidation;

    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'vehicle'))
        {
            return $error;
        }

        Vehicle::create($request->all());

        return $response->withSuccess('Vehicle Added Successfully');
    }

    public function show(Request $request, Response $response)
    {
        return $response->withView('admin/vehicles', ['vehicles' => Vehicle::all()]);
    }

    public function delete(Request $request, Response $response)
    {
        Vehicle::find($request->id)->delete();
        
        return $response->withRedirect('/vehicles');
    }
}
