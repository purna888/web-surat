<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    protected $table = 'surat_masuk';

    protected $fillable = [
        'no_surat',
        'tanggal_surat',
        'tanggal_terima',
        'pengirim',
        'perihal',
        'file',
    ];
}
