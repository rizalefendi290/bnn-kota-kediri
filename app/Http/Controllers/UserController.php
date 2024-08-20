<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\PermohonanNarasumber;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function history_permohonan_narasumber(){
        $user = auth()->user();

        $requests = PermohonanNarasumber::where("user_id", $user->id)->paginate(10);
        return view("permohonan.history_permohonan_narasumber", compact("requests"));
    }

    public function history_pengaduan(Request $request)
    {
        $query = Pengaduan::where('user_id', auth()->id());

        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }

        $pengaduans = $query->paginate(10);

        return view('pengaduan.history_pengaduan', compact('pengaduans'));
    }
}
