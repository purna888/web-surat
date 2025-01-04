<?php
namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratKeluarController extends Controller
{
    // Tampilkan semua surat keluar
    public function index(Request $request)
    {
        $query = SuratKeluar::query();

        // Pencarian berdasarkan no_surat, tujuan, atau perihal
        if ($search = $request->get('search')) {
            $query->where('no_surat', 'like', "%$search%")
                  ->orWhere('tujuan', 'like', "%$search%")
                  ->orWhere('perihal', 'like', "%$search%");
        }

        // Menampilkan hasil pencarian dengan pagination
        $suratKeluar = $query->paginate(10);

        return view('surat-keluar.index', compact('suratKeluar'));
    }

    // Tampilkan form tambah surat keluar
    public function create()
    {
        return view('surat-keluar.create');
    }

    // Simpan surat keluar baru
    public function store(Request $request)
    {
        // Validasi inputan dari pengguna
        $validated = $request->validate([
            'no_surat' => 'required|unique:surat_keluar',  // Unik berdasarkan no_surat
            'tanggal_surat' => 'required|date',
            'tanggal_terima' => 'required|date',
            'tujuan' => 'required|string',
            'perihal' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',  // Validasi file
        ]);

        // Menyimpan file jika ada
        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('surat-keluar_files', 'public');
        }

        // Menyimpan data surat keluar
        SuratKeluar::create($validated);

        // Redirect ke halaman index surat keluar dengan pesan sukses
        return redirect()->route('surat-keluar.index')->with('success', 'Surat keluar berhasil ditambahkan.');
    }

    // Tampilkan detail surat keluar
    public function show(SuratKeluar $suratKeluar)
    {
        return view('surat-keluar.show', compact('suratKeluar'));
    }

    // Tampilkan form edit surat keluar
    public function edit($id)
    {
        $suratKeluar = SuratKeluar::findOrFail($id);
        return view('surat-keluar.edit', compact('suratKeluar'));
    }
    

    // Update data surat keluar
    public function update(Request $request, SuratKeluar $suratKeluar)
    {
        // Validasi inputan dari pengguna
        $validated = $request->validate([
            'no_surat' => 'required|unique:surat_keluar,no_surat,' . $suratKeluar->id,  // Validasi untuk update no_surat
            'tanggal_surat' => 'required|date',
            'tanggal_terima' => 'required|date',
            'tujuan' => 'required|string',
            'perihal' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',  // Validasi file
        ]);

        // Proses upload file jika ada
        if ($request->hasFile('file')) {
            // Hapus file lama jika ada
            if ($suratKeluar->file) {
                Storage::disk('public')->delete($suratKeluar->file);
            }

            // Menyimpan file baru
            $validated['file'] = $request->file('file')->store('surat-keluar_files', 'public');
        }

        // Update data surat keluar
        $suratKeluar->update($validated);

        // Redirect ke halaman index surat keluar dengan pesan sukses
        return redirect()->route('surat-keluar.index')->with('success', 'Surat keluar berhasil diperbarui.');
    }

    // Hapus data surat keluar
    public function destroy($id)
    {
        // Temukan surat keluar berdasarkan ID
        $suratKeluar = SuratKeluar::findOrFail($id);
    
        // Hapus file surat jika ada
        if ($suratKeluar->file) {
            Storage::disk('public')->delete($suratKeluar->file);
        }
    
        // Hapus data surat keluar
        $suratKeluar->delete();
    
        // Redirect ke halaman index surat keluar dengan pesan sukses
        return redirect()->route('surat-keluar.index')->with('success', 'Surat keluar berhasil dihapus.');
    }
    

    // Fungsi untuk mendownload file surat keluar
    public function download(SuratKeluar $suratKeluar)
    {
        // Pastikan file ada
        if (!$suratKeluar->file || !file_exists(storage_path('app/public/' . $suratKeluar->file))) {
            return redirect()->route('surat-keluar.index')->with('error', 'File tidak ditemukan.');
        }

        // Mengunduh file
        return response()->download(storage_path('app/public/' . $suratKeluar->file));
    }
}
