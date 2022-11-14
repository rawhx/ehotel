<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
   public function profile()
   {
    return view('user/profile');
   }

   public function transaksi()
   {
    return view('user/riwayat');
   }
   
   public function pembayaran()
   {
    return view('user/pembayaran');
   }

   public function favorite()
   {
    return view('user/favorite');
   }

   public function pesan()
   {
    return view('user/pembayaran');
   }
   
   public function tiket()
   {
      return view('user/pesan');
   }
}
