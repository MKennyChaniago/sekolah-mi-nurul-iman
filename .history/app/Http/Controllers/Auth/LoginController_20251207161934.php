<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Kemana user akan diarahkan setelah login berhasil.
     */
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        // Middleware guest akan menendang user yang sudah login
        // Kita perbaiki logikanya di file middleware atau di handle di sini
        $this->middleware('guest')->except('logout');
    }

    // 1. Definisikan username (kamu sudah benar)
    public function username()
    {
        return 'username';
    }

    // 2. Tampilkan Form Login
    public function showLoginForm()
    {
        // Cek manual: Jika sudah login, langsung lempar ke dashboard
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        
        return view('admin.login'); 
    }

    // 3. Validasi Login
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    // 4. Custom Logout (Agar setelah logout lari ke halaman login/home)
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login admin lagi, atau ke home pengunjung
        return redirect()->route('login')->with('status', 'Anda berhasil logout!');
    }
}