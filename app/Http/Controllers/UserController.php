<?php

namespace App\Http\Controllers;

use App\Models\PermohonanNarasumber;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function history_permohonan_narasumber(){
        $user = auth()->user();

        $requests = PermohonanNarasumber::where("id", $user->id)->paginate(10);
        return view("permohonan.history_permohonan_narasumber", compact("requests"));
    }
}
