<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index(){
        return view('pengaduan.index');
    }

    public function create(){
        return view('pengaduan.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nomor' => 'required|numeric',
            'date' => 'required|date',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'laporan' => 'required|string|max:1000',
        ]);

        // Handle file upload
        if ($request->hasFile('photo')) {
            $filePath = $request->file('photo')->store('photos', 'public');
            $validatedData['photo'] = $filePath;
        }

        // Create a new Pengaduan record
        Pengaduan::create($validatedData);

        // Redirect back with a success message
        return redirect()->route('pengaduan.create')->with('success', 'Pengaduan submitted successfully!');
    }
}
