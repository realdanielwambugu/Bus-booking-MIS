<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Auth;

use App\Models\Route;

use App\Models\Vehicle;

use App\Models\Booking;

class BookingsController extends Controller
{
    use \App\Traits\HasValidation;

    public function checkout(Request $request, Response $response)
    {
        return $response->withView(
            'passanger/checkout',
            ['route' => Route::find($request->route_id)]
        );
    }

    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'booking'))
        {
            return $error;
        }

        $vehicle = Vehicle::find($request->vehicle_reg_no);

        if ($error = $vehicle->isFullyBooked($request->booked_seats))
        {
            return $response->withError($error);
        }

        $request->post->set('user_id', Auth::id());

        $request->post->set('total_cost', Booking::caculateTotalCost($request));

        Booking::create($request->except('route_id'));

        return $response->withSuccess('Booking Successful');
    }

    public function show(Request $request, Response $response)
    {
        if (Auth::user()->isAdmin())
        {
            if ($request->query->has('id'))
            {
                return $response->withView(
                    'admin/booking', ['booking' => Booking::find($request->id)]
                );
            }

            return $response->withView(
                'admin/bookings', ['bookings' => Booking::all()]
            );
        }

        return $response->withView(
            'passanger/bookings', ['bookings' => Auth::user()->booking]
        );
    }

    public function confirm(Request $request, Response $response)
    {
        Booking::find($request->id)->update(['status' => 'confirmed']);

        return $response->withRedirect("/booking/{$request->id}");
    }

    public function reject(Request $request, Response $response)
    {
        Booking::find($request->id)->update(['status' => 'rejected']);

        return $response->withRedirect("/booking/{$request->id}");
    }
}
