<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanSKHPN extends Controller
{
    public function index(){
        return view('permohonan.pengajuan_skhpn');
    }
}
