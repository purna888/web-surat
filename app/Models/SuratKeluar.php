<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;

    protected $table = 'surat_keluar';  // Nama tabel di database
    protected $fillable = [
        'no_surat', 'tanggal_surat', 'tanggal_terima', 'tujuan', 'perihal', 'file'
    ];
}
