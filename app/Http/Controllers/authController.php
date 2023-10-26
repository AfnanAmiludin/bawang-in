<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function registrasi(Request $request)
    {
        $attribute = $request->validate([
            'name',
            'email'     => ['required'],
            'password'  => ['required'],
            'role' => ['required']
        ]);
        $role = Role::where('name', $attribute['role'])->first();
        $attribute['password'] = Hash::make($request->password);
        $attribute['name'] = 'user';
        // dd($attribute);
        $user = User::create($attribute);
        UserRole::create([
            'user_id' => $user->id,
            'role_id' => $role->id
        ]);
        return redirect()->route('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'     => ['required'],
            'password'  => ['required']
        ]);
        if (!Auth::attempt($request->only('email', 'password'))) {
            return back()->with('loginError', 'login failed, please sign-in again!');
        }
        $request->session()->regenerate();
        return redirect()->route('role-page');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
