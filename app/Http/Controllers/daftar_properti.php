<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use App\Models\User;
use Illuminate\Http\Request;

class daftar_properti extends Controller
{
    public function daftar_properti(Request $request)
    {
        $validasi = $request->validate([
            'name'=> 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'no_telp' => 'required|max:13|min:12',
            'id_user' => ''
        ]);

        hotel::create($validasi);
        $request->session()->flash('berhasil', 'Registrasi Mendaftarkan Properti Berhasil');
        return back();
    }
}
