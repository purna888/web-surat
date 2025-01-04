@extends('layouts.layout')

@section('title', 'Detail Surat Masuk')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Detail Surat Masuk</h1>
    
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th class="w-25">Nomor Surat</th>
                    <td>{{ $suratMasuk->no_surat }}</td>
                </tr>
                <tr>
                    <th>Tanggal Surat</th>
                    <td>{{ $suratMasuk->tanggal_surat }}</td>
                </tr>
                <tr>
                    <th>Tanggal Terima</th>
                    <td>{{ $suratMasuk->tanggal_terima }}</td>
                </tr>
                <tr>
                    <th>Pengirim</th>
                    <td>{{ $suratMasuk->pengirim }}</td>
                </tr>
                <tr>
                    <th>Perihal</th>
                    <td>{{ $suratMasuk->perihal }}</td>
                </tr>
                <tr>
                    <th>File</th>
                    <td>
                        @if ($suratMasuk->file)
                            <a href="{{ route('surat-masuk.download', $suratMasuk->id) }}" 
                               class="btn btn-success btn-sm">
                               <i class="fa fa-download"></i> Download File
                            </a>
                        @else
                            <span class="text-muted">Tidak ada file untuk diunduh.</span>
                        @endif
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('surat-masuk.index') }}" class="btn btn-secondary">
            <i class="fa fa-arrow-left"></i> Kembali
        </a>
    </div>
</div>
@endsection
