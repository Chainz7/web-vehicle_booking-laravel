<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('register', compact('roles'));
    }
    public function store(Request $request)
    {
        // Validasi form
        $request->validate([
            'fullname' => 'required|string|max:100',
            'username' => 'required|string|unique:users',
            'password' => 'required|string|min:6',
            'role_id' => 'required|integer',
            'profile_picture_url' => 'required|string'
        ]);

        // Menyimpan data pengguna baru
        // $user = new User();
        // $user->fullname = $request->fullname;
        // $user->username = $request->username;
        // $user->password = Hash::make($request->password);
        // $user->role_id = $request->role_id;
        // $user->profile_picture_url = $request->profile_picture_url;
        // $user->save();
        User::create([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
            'profile_picture_url' => $request->profile_picture_url
        ]);

        // Redirect ke halaman profil
        return redirect()->route('login.index');
    }
}
