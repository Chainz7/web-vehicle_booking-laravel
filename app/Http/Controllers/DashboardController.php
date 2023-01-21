<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\MasterVehicle;
use App\Models\User;
use App\Models\VehicleBooking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $vehicles = MasterVehicle::all();
        $total_vehicles_booking = MasterVehicle::sum('booking_count');
        $drivers = Driver::all();
        $approvers = User::where('role_id', 2)->get();
        $orders = VehicleBooking::all();
        $total_orders = VehicleBooking::count();
        return view('admin/pages/dashboard', compact('users', 'vehicles', 'total_vehicles_booking', 'drivers', 'approvers', 'orders', 'total_orders'));
    }
    public function chooseDashboard($id)
    {
        session(['chosen_user' => $id]);
        return redirect()->route('vehicle.index');
    }
}
