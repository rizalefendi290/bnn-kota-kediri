<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\PengaduanMasyarakat;
use App\Models\PermohonanNarasumber;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("admin.dashboard");
    }


    public function pengaduan(){
        $pengaduan = Pengaduan::all();
        return view('admin.pengaduan.index', compact('pengaduan'));
    }
    //Admin Laporan Narasumbeer
    public function laporan_narasumber(Request $request){
        $query = PermohonanNarasumber::query();

        //filter berdasarkan nama
        if($request->has('name') && $request->name != ''){
            $query->where('name','LIKE', '%' .$request->name.'%');
        }

        //filter tanggal
        if ($request->filled('month')) {
            $date = \Carbon\Carbon::parse($request->input('month'));
            $query->whereYear('event_date', $date->year)
                  ->whereMonth('event_date', $date->month);
        }

        //pagination
        $laporan_narasumbers = $query->paginate(10)->appends($request->except('page'));

        return view('admin.laporan_narasumber', compact('laporan_narasumbers'));

    }
        public function updateStatus(Request $request, $id)
    {
        $laporan_narasumber = PermohonanNarasumber::find($id);
        $laporan_narasumber->status = $request->status;
        $laporan_narasumber->save();

        return redirect()->route('admin.laporan_narasumber')->with('success', 'Status laporan berhasil diperbarui.');
    }

}
