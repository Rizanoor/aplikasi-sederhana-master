<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        // menampung data array untuk memvalidasi data yang di request dengan memiliki beberapa rules
        $validatedData =  $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        // passwrd di acak menggunakan hash atau bisa menggunakan bcrypt
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // model user akan menghendel dan akan menyimpannya ke table user 
        User::create($validatedData);

        // kemudian akan di direct ke halaman login bersama dengan pesan success atau bisa menggunakan flash messages
        // $request->session()->flash('success', 'Registration successful!! Please Login');
        return redirect('/login')->with('success', 'Registration successful!! Please Login');
    }
}
