<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if(auth()->user()->role == 'admin'){
            return view('admin.dashboard');
        } else{
            return view('user.dashboard');
        }
    }

    public function pengaduan(){
        return view('frontend.pengaduan');
    }

    public function form(){
        return view('frontend.form');
    }

    public function permohonan(){
        return view('frontend.permohonan');
    }
}
