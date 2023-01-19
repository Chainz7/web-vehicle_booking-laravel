<?php

namespace App\Http\Controllers;

use App\Models\MasterVehicle;
use App\Models\VehicleBooking;
use Illuminate\Http\Request;

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
        session(['chosen_vehicle' => $id]);
        return redirect()->route('driver.index');
    }
}
