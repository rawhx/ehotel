<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guestcontroller extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
    public function search()
    {
        return view('pencarian');
    }
    public function hotel()
    {
        return view('hotel');
    }
    public function maps()
    {
        return view('maps');
    }
}
