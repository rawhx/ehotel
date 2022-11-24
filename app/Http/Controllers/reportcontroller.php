<?php

namespace App\Http\Controllers;

use App\Models\report;
use Illuminate\Http\Request;

class reportcontroller extends Controller
{
    public function report(Request $request)
    {
        $validasi = $request->validate([
            'report'=> 'required',
        ]);
        
        report::create($validasi); 
        $request->session()->flash('berhasil', 'Berhasil Melakukan Report');
        return back();
    }

    public function tampil_report() 
    {
        $report = report::all();
        return view('admin/report', ['report'=>$report]);
    }
}
