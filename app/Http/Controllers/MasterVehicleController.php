<?php

namespace App\Http\Controllers;

use App\Models\MasterVehicle;
use App\Models\VehicleBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasterVehicleController extends Controller
{
    public function index()
    {
        $vehicles = MasterVehicle::all();
        foreach ($vehicles as $item) {
            if (date_create($item->service_schedule) < date_create()) {
                $item->is_available = false;
            }
        }
        return view('admin/pages/vehicle', compact('vehicles'));
    }
    public function chooseVehicle($id)
    {
        $user = Auth::user();
        $latestVehicleBooking = VehicleBooking::where('submitter_id', $user->id)->where('status', 1)->latest()->first();
        // check if user has pending vehicle booking
        if ($latestVehicleBooking) {
            return redirect()->route('booking.index')->withErrors(['Please wait']);
        } else {
            session(['chosen_vehicle' => $id]);
            return redirect()->route('driver.index');
        }
    }
}
