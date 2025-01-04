<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat')->unique();  // Nomor surat yang unik
            $table->date('tanggal_surat');          // Tanggal surat dibuat
            $table->date('tanggal_terima');         // Tanggal surat diterima
            $table->string('pengirim');             // Nama pengirim
            $table->string('perihal');              // Perihal surat
            $table->string('file')->nullable();    // Path untuk menyimpan file surat (opsional)
            $table->timestamps();                  // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_masuk');
    }
};
