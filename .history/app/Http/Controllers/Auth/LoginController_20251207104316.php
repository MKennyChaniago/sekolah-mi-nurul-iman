<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // Arahkan ke dashboard setelah login sukses
    protected $redirectTo = '/admin/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // 1. Definisikan username (bukan email)
    public function username()
    {
        return 'username';
    }

    // 2. PENTING: Beritahu Laravel lokasi file view login kamu
    public function showLoginForm()
    {
        // Ini mengarah ke resources/views/admin/login.blade.php
        return view('admin.login'); 
    }

    // 3. Validasi login
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }
}