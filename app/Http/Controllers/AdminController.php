<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\PengaduanMasyarakat;
use App\Models\PermohonanNarasumber;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){        
        $totalPengaduan = Pengaduan::count();
        $totalPermohonan = PermohonanNarasumber::count();
        // Debugging

        return view("admin.dashboard", [
            'totalPengaduan' => $totalPengaduan,
            'totalPermohonan' => $totalPermohonan,
        ]);
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
            $month = $request->month;
            $query->whereMonth('event_date', $month);
        }
        if ($request->filled('year')) {
            $query->whereYear('event_date', $request->year);
        }

        //pagination
        $laporan_narasumbers = $query->paginate(10)->appends($request->except('page'));

        return view('admin.laporan_narasumber', compact('laporan_narasumbers'));

    }
    public function cetakLaporanNarasumber(Request $request)
    {
        // Ambil data berdasarkan filter yang diterapkan
        $query = PermohonanNarasumber::query();
    
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }
    
        if ($request->filled('month')) {
            // Filter berdasarkan bulan jika bulan diisi
            $query->whereMonth('event_date', '=', $request->month);
        }
    
        if ($request->filled('year')) {
            // Filter berdasarkan tahun jika tahun diisi
            $query->whereYear('event_date', '=', $request->year);
        }
    
        // Dapatkan hasil query setelah semua filter diterapkan
        $cetakLaporanNarasumbers = $query->get();
    
        // Generate PDF
        $pdf = PDF::loadView('admin.laporan_narasumber_pdf', compact('cetakLaporanNarasumbers'))
                    ->setPaper('a4', 'landscape');
    
        // Download PDF
        return $pdf->download('laporan_narasumber.pdf');
    }
    
    
    public function updateStatus(Request $request, $id)
    {
        $laporan_narasumber = PermohonanNarasumber::find($id);
        $laporan_narasumber->status = $request->status;
        $laporan_narasumber->save();

        return redirect()->route('admin.laporan_narasumber')->with('success', 'Status laporan berhasil diperbarui.');
    }

    public function dashboard()
    {
        $totalPengaduan = Pengaduan::count();
        $totalPermohonan = PermohonanNarasumber::count();
    

        return view("admin.dashboard", [
            'totalPengaduan' => $totalPengaduan,
            'totalPermohonan' => $totalPermohonan,
        ]);
    }

}