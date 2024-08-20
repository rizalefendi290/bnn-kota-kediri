<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\PermohonanNarasumber;


class PermohonanNarasumberController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'event_place' => 'required|string|max:255',
            'event_start_time' => 'required|date_format:H:i',
            'event_end_time' => 'required|date_format:H:i',
            'event_date' => 'required|date',
            'participants' => 'required|integer',
            'request_letter' => 'required|file|mimes:pdf|max:2048',
            'remarks' => 'nullable|string',
        ]);

        $requestLetterPath = $request->file('request_letter')->store('request_letters', 'public');

        $permohonan = PermohonanNarasumber::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'event_place' => $request->event_place,
            'event_start_time' => $request->event_start_time,
            'event_end_time' => $request->event_end_time,
            'event_date' => $request->event_date,
            'participants' => $request->participants,
            'request_letter' => $requestLetterPath,
            'remarks' => $request->remarks,
            'user_id' => auth()->id(), // Menambahkan user_id saat membuat record
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Permohonan berhasil dikirim!',
            'redirect' => route('permohonan.show', $permohonan->id),
        ]);
    }
    public function index(){
        return view('permohonan.permohonan_narasumber');
    }

    public function show($id){
        $permohonan = PermohonanNarasumber::findOrFail($id);
        return view('permohonan.show_permohonan_narasumber', compact('permohonan'));
    }

    public function destroy($id){
        $permohonan = PermohonanNarasumber::findOrFail($id);

        if ($permohonan->request_letter && Storage::exists($permohonan->request_letter)) {
            Storage::delete($permohonan->request_letter);
        }

        $permohonan->delete();

        return redirect()->route('admin.laporan_narasumber')->with('success', 'Data Berhasil di hapus');
    }
}
