<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        return view('pengaduan.index');
    }

    public function create()
    {
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

        // Add the authenticated user's ID to the validated data
        $validatedData['user_id'] = auth()->id();

        // Create a new Pengaduan record
        Pengaduan::create($validatedData);

        // Redirect back with a success message
        return redirect()->route('pengaduan.create')->with('success', 'Pengaduan submitted successfully!');
    }

    public function updateStatus(Request $request, $id)
    {
        // Validate the incoming status
        $request->validate([
            'status' => 'required|in:belum_diproses,proses,sudah_diproses',
        ]);

        // Find the complaint by ID
        $pengaduan = Pengaduan::findOrFail($id);

        // Update the status
        $pengaduan->status = $request->input('status');
        $pengaduan->save();

        // Redirect back with a success message
        return redirect()->route('admin.pengaduan.index')->with('success', 'Status updated successfully.');
    }
}
