<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $users = Auth::user();
        return view('admin/pages/profile', compact('users'));
    }
    public function update(Request $request)
    {
        $user = Auth::user();
        $user->fill($request->all());
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect()->back()->withSuccess('Successfully update user profile');
    }
}
