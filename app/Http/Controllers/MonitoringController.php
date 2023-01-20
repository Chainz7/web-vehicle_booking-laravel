<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use App\Models\MasterVehicle;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MonitoringController extends Controller
{
    public function index()
    {
        $chosen_user = Auth::user();
        $chosen_vehicle = MasterVehicle::find(session('chosen_vehicle'));
        $chosen_driver = Driver::find(session('chosen_driver'));
        $chosen_approver = User::find(session('chosen_approver'));
        return view('admin/pages/monitoring', compact('chosen_user', 'chosen_vehicle', 'chosen_driver', 'chosen_approver'));
    }
}
