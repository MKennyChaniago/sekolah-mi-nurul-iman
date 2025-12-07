<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/dashboard';

    public function __construct()
    {
        // PERBAIKAN: Matikan baris ini! Biar controller yang pegang kendali.
        // $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    public function showLoginForm()
    {
        // LOGIKA UTAMA:
        // Karena middleware dimatikan, request akan masuk ke sini.
        // Kita cek manual: Kalau sudah login -> Lempar ke Dashboard.
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        
        // Kalau belum login -> Tampilkan form.
        return view('admin.login'); 
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')
            ->with('status', 'Anda telah berhasil logout.');
    }
}