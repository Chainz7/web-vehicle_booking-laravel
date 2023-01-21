<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleBooking extends Model
{
    protected $table = 'vehicle_booking';
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'submitter_id');
    }

    public function masterVehicle()
    {
        return $this->belongsTo(MasterVehicle::class, 'vehicle_id');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approver_id')->where('role_id', 2);
    }
    public function vehicleDashboard()
    {
        return $this->belongsTo(MasterVehicle::class, 'vehicle_id');
    }
    public function driverDashboard()
    {
        return $this->belongsTo(Driver::class, 'driver_id');
    }
    public function approverDashboard()
    {
        return $this->belongsTo(User::class, 'approver_id')->where('role_id', 2);
    }
}
