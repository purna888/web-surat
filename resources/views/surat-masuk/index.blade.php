@extends('layouts.layout')

@section('title', 'Surat Masuk')

@section('content')
<h1>Daftar Surat Masuk</h1>

<!-- Form pencarian di pojok kanan -->
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <a href="{{ route('surat-masuk.create') }}" class="btn" style="padding: 10px 15px; background-color: #b3d1f0; color: #000; border-radius: 4px;">Tambah Surat</a>
    <form method="GET" action="{{ route('surat-masuk.index') }}" style="display: flex;">
        <input type="text" name="search" placeholder="Cari No Surat, Pengirim, atau Perihal"
               value="{{ request()->get('search') }}" 
               style="padding: 8px; width: 300px; border-radius: 4px; border: 1px solid #ccc;">
        <button type="submit" style="padding: 8px 12px; border-radius: 4px; background-color: #b3d1f0; color: #000; border: none;">
            <i class="fa fa-search"></i>
        </button>
    </form>
</div>

<!-- Tabel data surat masuk -->
<table class="table" style="width: 100%; margin-top: 20px; border-collapse: collapse;">
    <thead>
        <tr style="background-color: #f8f9fa; border-bottom: 1px solid #ccc;">
            <th>Nomor Surat</th>
            <th>Tanggal Surat</th>
            <th>Tanggal Terima</th>
            <th>Pengirim</th>
            <th>Perihal</th>
            <th>File</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($suratMasuk as $surat)
            <tr style="border-bottom: 1px solid #ddd;">
                <td>{{ $surat->no_surat }}</td>
                <td>{{ $surat->tanggal_surat }}</td>
                <td>{{ $surat->tanggal_terima }}</td>
                <td>{{ $surat->pengirim }}</td>
                <td>{{ $surat->perihal }}</td>
                <td>
                    @if ($surat->file)
                        <a href="{{ asset('storage/' . $surat->file) }}" target="_blank" style="color: #007bff;">Lihat File</a>
                    @else
                        Tidak ada file
                    @endif
                </td>
                <td>
                    <a href="{{ route('surat-masuk.show', $surat->id) }}" class="btn" style="padding: 5px 10px; background-color: #17a2b8; color: white; border-radius: 4px;">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('surat-masuk.edit', $surat->id) }}" class="btn" style="padding: 5px 10px; background-color: #ffc107; color: white; border-radius: 4px;">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form action="{{ route('surat-masuk.destroy', $surat->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn" style="padding: 5px 10px; background-color: #dc3545; color: white; border-radius: 4px;">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" style="text-align: center;">Tidak ada data yang ditemukan.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<!-- Menampilkan pagination -->
<div style="margin-top: 20px;">
    {{ $suratMasuk->appends(request()->query())->links() }}
</div>
@endsection
