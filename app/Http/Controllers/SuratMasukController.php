<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SuratMasukController extends Controller
{
    // Tampilkan semua data surat masuk
    public function index(Request $request)
    {
        $query = SuratMasuk::query();
    
        // Jika ada parameter pencarian
        if ($request->filled('search')) {
            $search = $request->input('search');
            // Filter berdasarkan no_surat, pengirim, atau perihal
            $query->where('no_surat', 'like', "%{$search}%")
                  ->orWhere('pengirim', 'like', "%{$search}%")
                  ->orWhere('perihal', 'like', "%{$search}%");
        }
    
        // Ambil hasil pencarian atau semua data dengan pagination
        $suratMasuk = $query->paginate(10);
    
        // Kirim data ke view
        return view('surat-masuk.index', compact('suratMasuk'));
    }
    
    // Tampilkan form tambah surat masuk
    public function create()
    {
        return view('surat-masuk.create');  // Menampilkan form untuk menambah surat masuk
    }

    // Simpan data surat masuk baru
    public function store(Request $request)
    {
        // Validasi inputan dari pengguna
        $validated = $request->validate([
            'no_surat' => 'required|unique:surat_masuk',  // Unik berdasarkan no_surat
            'tanggal_surat' => 'required|date',
            'tanggal_terima' => 'required|date',
            'pengirim' => 'required|string',
            'perihal' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',  // Validasi file
        ]);
    
        // Menyimpan file jika ada
        if ($request->hasFile('file')) {
            $originalFileName = $request->file('file')->getClientOriginalName();  // Dapatkan nama asli file
            $validated['file'] = $request->file('file')->storeAs('surat-masuk_files', $originalFileName, 'public');  // Menyimpan file dengan nama asli
            $validated['original_file_name'] = $originalFileName;  // Simpan nama asli file ke kolom 'original_file_name'
        }
    
        // Menyimpan data surat masuk
        SuratMasuk::create($validated);
    
        return redirect()->route('surat-masuk.index')->with('success', 'Surat masuk berhasil ditambahkan.');
    }
    

    // Tampilkan detail surat masuk
    public function show($id)
    {
        $suratMasuk = SuratMasuk::find($id);
    
        if (!$suratMasuk) {
            return redirect()->route('surat-masuk.index')
                ->with('error', 'Surat tidak ditemukan.');
        }
    
        return view('surat-masuk.show', compact('suratMasuk'));
    }
    

    // Tampilkan form edit surat masuk
    public function edit(SuratMasuk $suratMasuk)
    {
        return view('surat-masuk.edit', compact('suratMasuk'));  // Menampilkan form edit surat masuk
    }

    public function download(SuratMasuk $suratMasuk)
    {
        if ($suratMasuk->file && Storage::disk('public')->exists($suratMasuk->file)) {
            // Ambil nama asli file
            $filePath = storage_path('app/public/' . $suratMasuk->file);
            $fileName = basename($suratMasuk->file);  // Nama file tetap sesuai yang disimpan, bukan hash
            
            return response()->download($filePath, $fileName);
        }
    
        return redirect()->route('surat-masuk.show', $suratMasuk->id)
                         ->with('error', 'File tidak ditemukan.');
    }
    

    // Update data surat masuk
    public function update(Request $request, SuratMasuk $suratMasuk)
    {
        // Validasi inputan dari pengguna
        $validated = $request->validate([
            'no_surat' => 'required|unique:surat_masuk,no_surat,' . $suratMasuk->id,  // Validasi untuk update no_surat
            'tanggal_surat' => 'required|date',
            'tanggal_terima' => 'required|date',
            'pengirim' => 'required|string',
            'perihal' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',  // Validasi file
        ]);

        // Proses upload file jika ada
        if ($request->hasFile('file')) {
            // Hapus file lama jika ada
            if ($suratMasuk->file) {
                Storage::disk('public')->delete($suratMasuk->file);
            }

            // Menyimpan file baru
            $validated['file'] = $request->file('file')->store('surat-masuk_files', 'public');
        }

        // Update data surat masuk
        $suratMasuk->update($validated);

        return redirect()->route('surat-masuk.index')->with('success', 'Surat masuk berhasil diperbarui.');
    }

    // Hapus data surat masuk
    public function destroy($id)
    {
         // Temukan surat keluar berdasarkan ID
        $suratMasuk = SuratMasuk::findOrFail($id);
        // Hapus file surat jika ada
        if ($suratMasuk->file) {
            Storage::disk('public')->delete($suratMasuk->file);
        }

        // Hapus data surat masuk
        $suratMasuk->delete();

        return redirect()->route('surat-masuk.index')->with('success', 'Surat masuk berhasil dihapus.');
    }
}
