<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if(auth()->user()->role == 'admin'){
            return view('welcome');
        } else{
            return view('welcome');
        }
    }

    public function beranda(){
        return view('welcome');
    }
}
