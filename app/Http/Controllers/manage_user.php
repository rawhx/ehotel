<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class manage_user extends Controller
{
    public function delete($item)
    {
        User::destroy($item);
		return back()->with('logout', 'Berhasil Dihapus');
    }

    public function banned(Request $request,$item)
    { 
        $user = User::findOrFail($item);
        $user->lvl = $request->lvl;
        $user->update();
        return redirect('/users')->with('logout', 'Level Berhasil Di Ganti');
    }
}
