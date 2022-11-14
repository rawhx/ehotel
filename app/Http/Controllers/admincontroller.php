<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function user()
    {
        $data = User::all();
        return view('admin/pengguna', ['data'=>$data]);
        // return view('admin/pengguna');
    }
    public function hotel()
    {
        $data = User::all();
        return view('admin/properti', ['data'=>$data]);
        // return view('admin/pengguna');
    }
}
