@extends('layouts.layout')

@section('content')
<h1>Edit Surat Masuk</h1>
<form action="{{ route('surat-masuk.update', $suratMasuk->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div>
        <label for="no_surat">No Surat:</label>
        <input type="text" name="no_surat" value="{{ $suratMasuk->no_surat }}" required>
    </div>

    <div>
        <label for="tanggal_surat">Tanggal Surat:</label>
        <input type="date" name="tanggal_surat" value="{{ $suratMasuk->tanggal_surat }}" required>
    </div>

    <div>
        <label for="tanggal_terima">Tanggal Terima:</label>
        <input type="date" name="tanggal_terima" value="{{ $suratMasuk->tanggal_terima }}" required>
    </div>

    <div>
        <label for="pengirim">Pengirim:</label>
        <input type="text" name="pengirim" value="{{ $suratMasuk->pengirim }}" required>
    </div>

    <div>
        <label for="perihal">Perihal:</label>
        <input type="text" name="perihal" value="{{ $suratMasuk->perihal }}" required>
    </div>

    <div>
        <label for="file">File:</label>
        <input type="file" name="file">
    </div>

    <button type="submit">Update Surat Masuk</button>
</form>
@endsection


@section('styles')
<style>
    /* Styling untuk form */
    .form-container {
        width: 600px; /* Set lebar form */
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
    }

    /* Styling untuk judul */
    .title {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    /* Styling untuk group input */
    .form-group {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .form-group label {
        width: 30%; /* Lebar label */
        font-size: 14px;
        font-weight: 600;
        margin-right: 10px;
        color: #333;
    }

    .form-group input {
        width: 65%; /* Lebar input */
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
        display: flex;
        justify-content: flex-end; /* Posisikan button di pojok kanan */
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
