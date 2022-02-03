<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Route extends Model
{
    protected $fillable = [
        'from_A',
        'to_B',
        'departure_time',
        'cost_per_passanger',
    ];

    public function vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }


}
