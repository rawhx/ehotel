<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\hotel;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function manage_user()
    {
        $user = User::all();
        return view('admin/pengguna', ['data'=>$user]);
    }
    public function manage_hotel()
    {
        $hotel = hotel::all();
        return view('admin/properti', ['hotel'=>$hotel]);
    }
}
