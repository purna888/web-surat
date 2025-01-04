@extends('layouts.layout')

@section('content')
<h1 class="title">Tambah Surat Keluar</h1>

<form action="{{ route('surat-keluar.store') }}" method="POST" enctype="multipart/form-data" class="form-container">
    @csrf
    <div class="form-group">
        <label for="no_surat">Nomor Surat</label>
        <input type="text" name="no_surat" id="no_surat" placeholder="Nomor Surat" required>
    </div>
    
    <div class="form-group">
        <label for="tanggal_surat">Tanggal Surat</label>
        <input type="date" name="tanggal_surat" id="tanggal_surat" required>
    </div>
    
    <div class="form-group">
        <label for="tanggal_terima">Tanggal Terima</label>
        <input type="date" name="tanggal_terima" id="tanggal_terima" required>
    </div>
    
    <div class="form-group">
        <label for="tujuan">Tujuan</label>
        <input type="text" name="tujuan" id="tujuan" placeholder="Tujuan" required>
    </div>
    
    <div class="form-group">
        <label for="perihal">Perihal</label>
        <input type="text" name="perihal" id="perihal" placeholder="Perihal" required>
    </div>
    
    <div class="form-group">
        <label for="file">File</label>
        <input type="file" name="file" id="file">
    </div>
    
    <div class="button-container">
        <button type="submit">Simpan</button>
    </div>
</form>

@endsection

@section('styles')
<style>
    /* Styling untuk form */
    .form-container {
        width: 600px; /* Set lebar form */
        padding: 20px;
        border: none;
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
