<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arsip;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;

class ArsipController extends Controller
{
    // Halaman utama arsip (list + search)
    public function index(Request $request)
    {
        $query = Arsip::with('kategori');

        // Search berdasarkan judul
        if ($request->has('search') && $request->search != '') {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        $arsip = $query->latest()->get();

        return view('arsip.arsipadmin', compact('arsip'));
    }

    // Form tambah arsip
    public function create()
    {
        $kategori = Kategori::all();
        return view('arsip.form', compact('kategori'));
    }

    // Simpan arsip baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori_id' => 'required',
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        $path = $request->file('file')->store('arsip', 'public');

        Arsip::create([
            'judul' => $request->judul,
            'kategori_id' => $request->kategori_id,
            'file' => $path,
        ]);

        return redirect()->route('arsipadmin')->with('success', 'Data berhasil disimpan');
    }

    // Lihat detail arsip
    public function show($id)
    {
        $arsip = Arsip::with('kategori')->findOrFail($id);
        return view('arsip.show', compact('arsip'));
    }

    // Form edit arsip
    public function edit($id)
    {
        $arsip = Arsip::findOrFail($id);
        $kategori = Kategori::all();
        return view('arsip.form', compact('arsip', 'kategori'));
    }

    // Update arsip
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'kategori_id' => 'required',
            'file' => 'nullable|mimes:pdf|max:2048',
        ]);

        $arsip = Arsip::findOrFail($id);

        $path = $arsip->file;
        if ($request->hasFile('file')) {
            // hapus file lama
            Storage::disk('public')->delete($arsip->file);
            $path = $request->file('file')->store('arsip', 'public');
        }

        $arsip->update([
            'judul' => $request->judul,
            'kategori_id' => $request->kategori_id,
            'file' => $path,
        ]);

        return redirect()->route('arsipadmin')->with('success', 'Data berhasil diperbarui');
    }

    // Hapus arsip
    public function destroy($id)
    {
        $arsip = Arsip::findOrFail($id);
        Storage::disk('public')->delete($arsip->file);
        $arsip->delete();

        return response()->json(['success' => true]);
    }

    // Download file PDF
    public function download($id)
    {
        $arsip = Arsip::findOrFail($id);

        // ambil nama file aslinya (judul.pdf)
        $namaFile = $arsip->judul . '.pdf';

        return Storage::disk('public')->download($arsip->file, $namaFile);
    }
}
