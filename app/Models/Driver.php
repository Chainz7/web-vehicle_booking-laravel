<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $hidden = [];
    public function vehicleBookings()
    {
        return $this->hasMany(VehicleBooking::class);
    }
    
}
