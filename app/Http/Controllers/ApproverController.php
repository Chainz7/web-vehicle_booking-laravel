<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VehicleBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function indexApprover()
    {
        $user_id = Auth::user()->id;
        $bookings = VehicleBooking::where('approver_id', $user_id)->latest()->first();
        return view('approver/pages/approve', compact('bookings'));
    }
    public function storeApprover(Request $request)
    {
        $statusApprove = VehicleBooking::find($request->id);
        $statusApprove->status = $request->input('status');
        $statusApprove->save();
        return redirect()->route('dashboardApprover.index')->withSuccess('Successfully added new vehicle booking');
    }
    public function rejectApprover(Request $request)
    {
        $statusApprove = VehicleBooking::find($request->id);
        $statusApprove->status = $request->input('status');
        $statusApprove->save();
        return redirect()->route('dashboardApprover.index')->withSuccess('Successfully added new vehicle booking');
    }
}
