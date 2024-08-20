<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPengaduanController extends Controller
{
    public function index(Request $request)
    {
        // Filtering based on status
        $query = Pengaduan::query();

        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }

        if ($request->has('day') && $request->day != '') {
            $query->whereDay('date', $request->day);
        }

        if ($request->has('month') && $request->month != '') {
            $query->whereMonth('date', $request->month);
        }

        if ($request->has('year') && $request->year != '') {
            $query->whereYear('date', $request->year);
        }

        // Multi-user support: show only complaints of the logged-in user
        if (auth()->user()->role != 'admin') {
            $query->where('user_id', auth()->id());
        }

        $pengaduans = $query->paginate(10);

        return view('admin.pengaduan.index', compact('pengaduans'));
    }

    public function show($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('admin.pengaduan.show', compact('pengaduan'));
    }

    public function updateStatus(Request $request, $id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->status = $request->status;
        $pengaduan->save();

        return redirect()->route('admin.pengaduan.index')->with('success', 'Status updated successfully.');
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
            'user_id' => ''
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
