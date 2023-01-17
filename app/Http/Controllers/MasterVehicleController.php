<?php

namespace App\Http\Controllers;

use App\Models\MasterVehicle;
use Illuminate\Http\Request;

class MasterVehicleController extends Controller
{
    public function index()
    {
        $vehicles = MasterVehicle::all();
        return view('admin/pages/vehicle', compact('vehicles'));
    }
    public function choose($id)
    {
        session(['chosen_vehicle' => $id]);
        return redirect()->route('driver.index');
    }
}
