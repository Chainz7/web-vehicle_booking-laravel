<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VehicleBooking;
use Illuminate\Http\Request;

class ApproverController extends Controller
{
    public function index()
    {
        $approvers = User::where('role_id', 2)->get();
        return view('admin/pages/approver', compact('approvers'));
    }
    public function chooseApprover($id)
    {
        session(['chosen_approver' => $id]);
        return redirect()->route('monitoring.index');
    }

}
