<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class logincontroller extends Controller
{
    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($login)) {
            if (auth()->user()->lvl=='admin') {
                $request->session()->regenerate();
                return redirect('/profile')->with('login', 'Selamat Datang Admin Di E-HOTEL');
            } 
            $request->session()->regenerate();
            return redirect()->back()->with('login', 'Selamat Datang Di E-HOTEL');
        } else {
            return back()->with('gagal', 'Login Gagal!');
        }
    }

    public function daftar(Request $request)
    {
        $validasi = $request->validate([
            'name'=> 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'password2' => 'required',
        ]);

        if ($validasi['password'] = $validasi['password2']) {
            $validasi['password'] = bcrypt($validasi['password']);
            User::create($validasi);
        } 
        $request->session()->flash('berhasil', 'Registrasi Berhasil');
        return back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('logout', 'Berhasil Logout');
    }

    // public function admin(Request $request)
    // {
    //     $login = $request->validate([
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);

    //     if (Auth::attempt($login) == Auth::check('lvl["admin"]')) {
    //         $request->session()->regenerate();
    //         return redirect('profile')->with('login', 'Selamat Datang Di E-HOTEL');
    //     } else {
    //         return back()->with('gagal', 'Login Gagal!');
    //     }
    // }

    public function update_profile(Request $request)
    {
        $request->user()->update(
            $request->all()
        );    
    }
}
