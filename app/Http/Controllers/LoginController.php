<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        // menampilkan view login
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        // validasi email dan password
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // membuat kondisi auth untuk login
        // jika percobaan login itu berhasil maka akan di pindahkan ke halaman dashboard
        // kalau gagal maka akan dipindahkan lagi ke halaman login dan membawa pesan loginerror
        if (Auth::attempt($credentials)) {
            // sessionnya di regenerate untuk menghindari teknik hacking
            $request->session()->regenerate();

            // (intended)-> meriderict usernya ke url sebelum melewati authentication middleware 
            // supaya melewati middlewarenya
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout()
    {
        // fungsi logut jika session habis maka auth akan keluar sendiri atau di direct ke halaman home
        Auth::logout();

        // invalidate sessionnya agar tidak bisa di pakai lagi
        request()->session()->invalidate();

        //bikin baru regenerateToken agar tidak bisa di bajak 
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
