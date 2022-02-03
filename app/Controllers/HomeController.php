<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Auth;

use App\Models\User;

use App\Models\Vehicle;

use App\Models\Booking;

use App\Models\Route;

class HomeController
{
    public function show(Request $request, Response $response)
    {
        if (!Auth::check())
        {
            return $response->withView('home');
        }

        if (Auth::user()->isAdmin())
        {
            return $response->withView(
                'admin/home',
                [
                    'users_count'    => User::count(),
                    'vehicles_count' => Vehicle::count(),
                    'booking_count'  => Booking::count(),
                    'routes_count'   => Route::count(),
                ]
            );
        }

        return $response->withView('passanger/home', ['routes' => Route::all()]);
    }

}
