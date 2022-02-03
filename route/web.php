<?php

use Xcholars\Support\Proxies\Route;

use Xcholars\Support\Proxies\RouteGroup as Group;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Route as Routes;

Route::get('/', 'HomeController@show');

Route::get('/home', 'HomeController@show');

Group::middleware('auth')->members(function ()
{
    //join
    Route::view('/signup', 'auth/signup');

    Route::post('/signup', 'SignupController@create');

    //login
    Route::view('/signin', 'auth/signin');

    Route::post('/signin', 'LoginController@authenticate');

    //resetPassword
    Route::view('/forgotPassword', 'auth/forgotPassword');

    Route::post('/forgotPassword', 'forgotPasswordController@verify');

    //resetCode
    Route::view('/confirmResetCode', 'auth/confirmResetCode');

    Route::post('/confirmResetCode', 'ResetPasswordController@verifyResetCode');

    //resetPassword
    Route::view('/resetPassword', 'auth/resetPassword');

    Route::post('/resetPassword', 'ResetPasswordController@reset');
});

Group::middleware('guest')->members(function ()
{
    // sign Out
    Route::get('/logout', 'LogoutController@logout');

    Route::post('/logout', 'LogoutController@logout');
    
    // profile
    Route::get('/profile', 'ProfileController@show');

    // Bookings
    Route::get('/bookings', 'BookingsController@show');

    Route::get('/checkout/{route_id}', 'BookingsController@checkout');

    Route::post('/checkout', 'BookingsController@create');

    Route::get('/confirm/{id}', 'BookingsController@confirm');

    Route::get('/reject/{id}', 'BookingsController@reject');

   // FOR ADMIN ONLY //
    Group::middleware('admin')->members(function ()
    {
        // users
        Route::get('/users', 'ProfileController@show');

        // vehicles
        Route::get('/vehicles', 'VehiclesController@show');

        Route::get('/addvehicle', function (Response $response)
        {
            return $response->withView(
                'admin/addVehicle',
                ['routes' => Routes::all()]
            );
        });

        Route::post('/addvehicle', 'VehiclesController@create');

        Route::get('/deletevehicle/{id}', 'VehiclesController@delete');
        // routes
        Route::get('/routes', 'RoutesController@show');

        Route::view('/addroute', 'admin/addRoute');

        Route::post('/addroute', 'RoutesController@create');

        Route::get('/deleteroute/{id}', 'RoutesController@delete');

        Route::get('/booking/{id}', 'BookingsController@show');
    });
});

Route::fallback(function ()
{
    throw new \Xcholars\Exceptions\NotFoundException(
        "Sorry! Requested Route Not Found"
    );
});
