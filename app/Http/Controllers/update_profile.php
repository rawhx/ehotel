<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class update_profile extends Controller
{
   public function update(Request $request, $item)
   {
        $user = User::findOrFail($item);
        $user->name = $request->name;
        $email = $user->email = $request->email;
        $user->password = bcrypt($request->password);
        if (!$email == 0) {
            $user->update();
            return redirect('/profile')->with('logout', 'Profile Berhasil Di Update');
        } else {
            return redirect('/profile')->with('logout', 'Profile Gagal Di Update');
        }
   }
}
