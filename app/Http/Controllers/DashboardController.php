<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VehicleBooking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::where('id', 1)->get();
        return view('admin/index', compact('users'));
    }
    public function chooseDashboard($id)
    {
        session(['chosen_user' => $id]);
        return redirect()->route('vehicle.index');
    }
}
