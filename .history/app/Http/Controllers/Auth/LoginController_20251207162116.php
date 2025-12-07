<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | Controller ini menangani autentikasi user dan redirect setelah login.
    |
    */

    use AuthenticatesUsers;

    /**
     * Kemana user akan diarahkan setelah sukses login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        // Middleware guest mencegah user yang sudah login mengakses halaman login
        // kecuali method 'logout'
        $this->middleware('guest')->except('logout');
    }

    /**
     * Tentukan field yang digunakan untuk login (Default email, kita ubah ke username).
     */
    public function username()
    {
        return 'username';
    }

    /**
     * Tampilkan form login.
     * PERBAIKAN LOGIC: Jika sudah login, lempar ke dashboard, jangan ke home.
     */
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        
        return view('admin.login'); 
    }

    /**
     * Validasi input request login.
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    /**
     * Proses Logout.
     * Custom redirect agar setelah logout kembali ke halaman login dengan pesan.
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')
            ->with('status', 'Anda telah berhasil logout.');
    }
}