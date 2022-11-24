<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class manage_hotel extends Controller
{
    public function edit()
    {
      return view('admin hotel/edit');
    }
    public function delete_hotel($item)
    {
      // $item->delete();
      hotel::destroy($item);
		  return back()->with('logout', 'Berhasil Dihapus');
    }
}
