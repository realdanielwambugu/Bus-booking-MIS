<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

use Xcholars\Http\Request;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'vehicle_reg_no',
        'booked_seats',
        'status',
        'mpesa_code',
        'booked_date',
        'total_cost',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function caculateTotalCost(Request $request)
    {
        return Route::find($request->route_id)->cost_per_passanger * $request->booked_seats;
    }

    public function isPending()
    {
        return $this->status === 'pending';
    }

    public function isConfirmed()
    {
        return $this->status === 'confirmed';
    }

    public function isRejected()
    {
        return $this->status === 'rejected';
    }
}
