@extends('layouts.layout')

@section('title', 'Detail Surat Keluar')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Detail Surat Keluar</h1>
    
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th class="w-25">Nomor Surat</th>
                    <td>{{ $suratKeluar->no_surat }}</td>
                </tr>
                <tr>
                    <th>Tanggal Surat</th>
                    <td>{{ $suratKeluar->tanggal_surat }}</td>
                </tr>
                <tr>
                    <th>Tanggal Terima</th>
                    <td>{{ $suratKeluar->tanggal_terima }}</td>
                </tr>
                <tr>
                    <th>Tujuan</th>
                    <td>{{ $suratKeluar->tujuan }}</td>
                </tr>
                <tr>
                    <th>Perihal</th>
                    <td>{{ $suratKeluar->perihal }}</td>
                </tr>
                <tr>
                    <th>File</th>
                    <td>
                        @if ($suratKeluar->file)
                            <a href="{{ route('surat-keluar.download', $suratKeluar->id) }}" 
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
        <a href="{{ route('surat-keluar.index') }}" class="btn btn-secondary">
            <i class="fa fa-arrow-left"></i> Kembali
        </a>
    </div>
</div>
@endsection
