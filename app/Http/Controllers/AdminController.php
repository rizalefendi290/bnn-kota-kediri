<?php

namespace App\Http\Controllers;

use App\Models\PermohonanNarasumber;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("admin.dashboard");
    }

    public function laporan_narasumber(){
        $laporan_narasumbers = PermohonanNarasumber::all();
        return view('admin.laporan_narasumber', compact('laporan_narasumbers'));
    }
    
}
