<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MasterVehicle;
use App\Models\Driver;
use App\Models\Approver;
use App\Models\VehicleBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehicleBookingController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $vehicleBookings = VehicleBooking::with(['user', 'masterVehicle', 'driver', 'approver'])->where('submitter_id', $user_id)->get();
        return view('admin/pages/history', compact('vehicleBookings'));
    }
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
        session()->forget(['chosen_vehicle', 'chosen_driver', 'chosen_approver']);
        return redirect()->route('booking.index')->withSuccess('Successfully added new vehicle booking');
    }
}
