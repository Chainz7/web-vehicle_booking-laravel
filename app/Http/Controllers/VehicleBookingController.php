<?php

namespace App\Http\Controllers;

use App\Models\VehicleBooking;
use Illuminate\Http\Request;

class VehicleBookingController extends Controller
{
    public function store(Request $request)
    {
        $vehiclebooking = new VehicleBooking();
        $vehiclebooking->vehicle_id = $request->vehicle_id;
        $vehiclebooking->approver_id = $request->approver_id;
        $vehiclebooking->submitter_id = $request->submitter_id;
        $vehiclebooking->driver_id = $request->driver_id;
        $vehiclebooking->booking_date = $request->booking_date;
        $vehiclebooking->status = $request->status;
        $vehiclebooking->save();
        return redirect()->back()->withSuccess('Successfully added new vehicle booking');
    }
}
