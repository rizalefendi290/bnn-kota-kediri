<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPengaduanController extends Controller
{
    public function index(Request $request)
    {
        $query = Pengaduan::query();

        // Get filter inputs
        $day = $request->input('day');
        $month = $request->input('month');
        $year = $request->input('year');

        // Apply filters
        if ($day) {
            $query->whereDay('date', $day);
        }

        if ($month) {
            $query->whereMonth('date', $month);
        }

        if ($year) {
            $query->whereYear('date', $year);
        }

        // Get filtered results
        $pengaduans = $query->get();

        // Pass filter data to view
        return view('admin.pengaduan.index', compact('pengaduans', 'day', 'month', 'year'));

        $pengaduans = Pengaduan::all();
        return view('admin.pengaduan.index', compact('pengaduans'));
    }

    // Display the specified pengaduan
    public function show($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('admin.pengaduan.show', compact('pengaduan'));
    }

    // Show the form for editing the specified pengaduan
    public function edit($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('admin.pengaduan.edit', compact('pengaduan'));
    }

    // Update the specified pengaduan in storage
    public function update(Request $request, $id)
    {
        $pengaduan = Pengaduan::findOrFail($id);

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nomor' => 'required|numeric',
            'date' => 'required|date',
            'laporan' => 'required|string|max:1000',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('photo')) {
            // Store the file in the public/photos directory
            $filePath = $request->file('photo')->store('photos', 'public');
            $validatedData['photo'] = $filePath;
        }

        return redirect()->route('admin.pengaduan.index')->with('success', 'Pengaduan updated successfully!');
    }

    // Remove the specified pengaduan from storage
    public function destroy($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);

        // Delete photo from storage if exists
        if ($pengaduan->photo) {
            Storage::delete('public/' . $pengaduan->photo);
        }

        $pengaduan->delete();

        return redirect()->route('admin.pengaduan.index')->with('success', 'Pengaduan deleted successfully!');
    }
}
