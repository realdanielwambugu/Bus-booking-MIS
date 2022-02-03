<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Vehicle extends Model
{
    protected $primaryKey = 'reg_no';

    protected $fillable = [
        'reg_no',
        'type',
        'seats',
        'route_id',
    ];

    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

    public function isFullyBooked($requested_seats)
    {
        if ($requested_seats < 1)
        {
            return "{$requested_seats} is invalid ! number of booked seats
            must be more than zero";
        }

        $total_booked_seats = 0;

        foreach ($this->booking as $booking)
        {
            $total_booked_seats = $total_booked_seats + $booking->booked_seats;
        }

        $remaining_seats = $this->seats - $total_booked_seats;

        if ($requested_seats > $this->seats)
        {
            return "Vehicle {$this->reg_no} has only {$this->seats} seats";
        }

        if ($total_booked_seats == $this->seats)
        {
            return "vehicle {$this->reg_no} is fully booked
            please select another vehicle";
        }

        if ($requested_seats > $remaining_seats)
        {
            return "Sorry! Vehicle {$this->reg_no} has {$remaining_seats} remaining seats";
        }

        return false;
    }
}
