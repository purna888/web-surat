@extends('layouts.layout')

@section('content')
<h1>Edit Surat Keluar</h1>
<form action="{{ route('surat-keluar.update', $suratKeluar->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label for="no_surat">No Surat:</label>
        <input type="text" name="no_surat" value="{{ $suratKeluar->no_surat }}" required>
    </div>

    <div class="form-group">
        <label for="tanggal_surat">Tanggal Surat:</label>
        <input type="date" name="tanggal_surat" value="{{ $suratKeluar->tanggal_surat }}" required>
    </div>

    <div class="form-group">
        <label for="tanggal_terima">Tanggal Terima:</label>
        <input type="date" name="tanggal_terima" value="{{ $suratKeluar->tanggal_terima }}" required>
    </div>

    <div class="form-group">
        <label for="tujuan">Tujuan:</label>
        <input type="text" name="tujuan" value="{{ $suratKeluar->tujuan }}" required>
    </div>

    <div class="form-group">
        <label for="perihal">Perihal:</label>
        <input type="text" name="perihal" value="{{ $suratKeluar->perihal }}" required>
    </div>

    <div class="form-group">
        <label for="file">File Surat:</label>
        <input type="file" name="file">
        @if($suratKeluar->file)
            <p class="current-file">File saat ini: {{ basename($suratKeluar->file) }}</p>
        @endif
    </div>

    <div class="button-container">
        <button type="submit">Update Surat Keluar</button>
    </div>
</form>
@endsection

@section('styles')
<style>
    /* Styling untuk form */
    .form-group {
        margin-bottom: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .form-group label {
        font-size: 16px;
        font-weight: 600;
        width: 30%;
    }

    .form-group input {
        width: 65%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-group input:focus {
        border-color: #007bff;
        outline: none;
    }

    .current-file {
        font-size: 14px;
        margin-top: 5px;
    }

    /* Styling untuk button container */
    .button-container {
        text-align: right;
    }

    button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>
@endsection
