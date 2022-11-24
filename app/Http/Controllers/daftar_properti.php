<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use App\Models\User;
use Illuminate\Http\Request;

class daftar_properti extends Controller
{
    public function daftar_properti(Request $request,User $usr)
    {
        $validasi = $request->validate([
            'name'=> 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'no_telp' => 'required|max:13',
            'email' => '',
            'id_user' => '',
        ]);

        if ($validasi == $validasi) {
            // $user = User::findOrFail($usr);
            // $user->lvl = 'admin_hotel';
            // $user->update();
            
            hotel::create($validasi);
            $request->session()->flash('berhasil', 'Registrasi Properti Berhasil Harap Menunggu Untuk Diproses Admin😊');
            return back();
        } else {
            $request->session()->flash('berhasil', 'Registrasi Gagal');
            return back();
        }
    }
}
