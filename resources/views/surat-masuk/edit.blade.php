@extends('layouts.layout')

@section('content')
<h1 class="title">Edit Surat Masuk</h1>
<div class="form-container">
    <form action="{{ route('surat-masuk.update', $suratMasuk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="no_surat">No Surat:</label>
            <input type="text" name="no_surat" value="{{ old('no_surat', $suratMasuk->no_surat) }}" required>
        </div>

        <div class="form-group">
            <label for="tanggal_surat">Tanggal Surat:</label>
            <input type="date" name="tanggal_surat" value="{{ old('tanggal_surat', $suratMasuk->tanggal_surat) }}" required>
        </div>

        <div class="form-group">
            <label for="tanggal_terima">Tanggal Terima:</label>
            <input type="date" name="tanggal_terima" value="{{ old('tanggal_terima', $suratMasuk->tanggal_terima) }}" required>
        </div>

        <div class="form-group">
            <label for="pengirim">Pengirim:</label>
            <input type="text" name="pengirim" value="{{ old('pengirim', $suratMasuk->pengirim) }}" required>
        </div>

        <div class="form-group">
            <label for="perihal">Perihal:</label>
            <input type="text" name="perihal" value="{{ old('perihal', $suratMasuk->perihal) }}" required>
        </div>

        <div class="form-group">
            <label for="file">File:</label>
            <input type="file" name="file">
        </div>

        @if ($suratMasuk->file)
            <div class="current-file">
                <p>File saat ini: 
                    <a href="{{ route('surat-masuk.download', $suratMasuk->id) }}" target="_blank">
                        {{ basename($suratMasuk->file) }}
                    </a>
                </p>
            </div>
        @endif

        <div class="button-container">
            <button type="submit">Update Surat Masuk</button>
        </div>
    </form>
</div>
@endsection

@section('styles')
<style>
    /* Styling untuk form */
    .form-container {
        width: 600px;
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
    }

    .title {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .form-group {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .form-group label {
        width: 30%;
        font-size: 14px;
        font-weight: 600;
        margin-right: 10px;
        color: #333;
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

    .button-container {
        display: flex;
        justify-content: flex-end;
        margin-top: 20px;
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
