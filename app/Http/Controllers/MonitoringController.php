<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use App\Models\MasterVehicle;
use App\Models\Driver;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index()
    {
        $chosen_vehicle = MasterVehicle::find(session('chosen_vehicle'));
        $chosen_driver = Driver::find(session('chosen_driver'));
        return view('admin/pages/monitoring', compact('chosen_vehicle', 'chosen_driver'));
    }
}
