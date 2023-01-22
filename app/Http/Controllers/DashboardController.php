<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\MasterVehicle;
use App\Models\User;
use App\Models\VehicleBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $vehicles = MasterVehicle::all();
        $total_vehicles = MasterVehicle::count();
        $total_vehicles_booking = MasterVehicle::sum('booking_count');
        $drivers = Driver::all();
        $total_drivers = Driver::count();
        $approvers = User::where('role_id', 2)->get();
        $total_approvers = User::where('role_id', 2)->count();
        $orders = VehicleBooking::where('submitter_id', $user_id)->get();
        $total_orders = VehicleBooking::where('submitter_id', $user_id)->count();
        return view('admin/pages/dashboard', compact('vehicles', 'total_vehicles', 'total_vehicles_booking', 'drivers', 'total_drivers', 'approvers', 'total_approvers', 'orders', 'total_orders'));
    }
    public function chooseDashboard($id)
    {
        session(['chosen_user' => $id]);
        return redirect()->route('vehicle.index');
    }
    public function indexApprover()
    {
        $user_id = Auth::user()->id;
        $orders = VehicleBooking::where('approver_id', $user_id)->get();
        $total_orders = VehicleBooking::where('approver_id', $user_id)->count();
        $latestVehicleBooking = VehicleBooking::where('approver_id', $user_id)->where('status', 1)->latest()->first();
        // check if user has pending vehicle booking
        return view('approver/pages/dashboard', compact('orders', 'total_orders', 'latestVehicleBooking'));
    }
}
