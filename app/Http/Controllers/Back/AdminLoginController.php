<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminLoginController extends Controller
{
    // Menampilkan form login admin
    public function showLoginForm()
    {
    //    $defaultGuard = Auth::getDefaultDriver();
    //         $guard = Auth::guard(); 
    //         dd(Auth::guard('admin')->user());
        return view('back.formadmin');
    }

    // Proses login admin
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Menggunakan guard 'admin' untuk login
        if (Auth::guard('admin')->attempt($credentials)) {
             
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Email or password is incorrect']);
    }

    // Logout admin
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}
