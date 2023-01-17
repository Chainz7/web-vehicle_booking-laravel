<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        return view('admin/pages/driver', compact('drivers'));
    }
    public function chooseDriver($id)
    {
        session(['chosen_driver' => $id]);
        return redirect()->route('approver.index');
    }
}
