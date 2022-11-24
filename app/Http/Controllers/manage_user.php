<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class manage_user extends Controller
{
    public function banned(Request $request)
    {
        $validasi = $request->validate([
            'lvl' => 'admin'
        ]);
        User::update($validasi);
        $request->session()->flash('berhasil', 'Registrasi Mendaftarkan Properti Berhasil');
        return back();
        // $this->user()->where('id', $request);
        // $this->user()->update('lvl', array['active'=>'banned']);
    }
}
