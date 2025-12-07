<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request; // Tambahkan baris ini

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/dashboard'; // Setelah login, arahkan ke dashboard

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // --- TAMBAHAN KODE KHUSUS ---
    
    // 1. Paksa Laravel pakai 'username' bukan 'email'
    public function username()
    {
        return 'username';
    }

    // 2. (Opsional) Hapus validasi email, ganti jadi string biasa
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }
}