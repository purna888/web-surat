@extends('layouts.layout')

@section('title', 'Beranda')

@section('content')
<div class="card shadow-sm bg-white rounded-lg">
    <div class="card-body text-gray-900 p-4">
        <!-- Header -->
        <div class="d-flex align-items-center justify-content-between mb-2">
            <h3 class=" text-gray-800 mb-0">Beranda</h3>
        </div>
        
        <!-- Content -->
        <div class="py-2">
            <p class="text-m leading-tight text-gray-700 mb-0">
                {{ __("Selamat datang di Beranda Penginputan surat pascasarjana INSTITUT TEKNOLOGI DAN BISNIS STIKOM BALI") }}
            </p>
        </div>
    </div>
</div>

<!-- Card Surat Masuk -->
<div class="container mt-4">
    <div class="row row-cols-1 row-cols-md-2 g-3">
        <!-- Card 1 -->
        <div class="col">
            <div class="card text-grey-700 bg-light shadow-sm rounded-lg">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <i class="fas fa-envelope fa-3x"></i>
                    </div>
                    <div>
                        <h5 class="card-title mb-1 px-2">Surat Masuk</h5>
                        <p class="card-text mb-0 fs-4 fw-bold px-2">0</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col">
            <div class="card text-grey-700 bg-light shadow-sm rounded-lg">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <i class="fas fa-envelope fa-3x"></i>
                    </div>
                    <div>
                        <h5 class="card-title mb-1 px-2">Surat Keluar</h5>
                        <p class="card-text mb-0 fs-4 fw-bold px-2">5</p>
                    </div>
                </div>
            </div>
        </div>
     <!-- Card 3 -->
        <div class="col">
            <div class="card text-grey-700 bg-light shadow-sm rounded-lg mt-3">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <i class="fas fa-envelope fa-3x"></i>
                    </div>
                    <div>
                        <h5 class="card-title mb-1 px-2">Surat Disposisi</h5>
                        <p class="card-text mb-0 fs-4 fw-bold px-2">5</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-grey-700 bg-light shadow-sm rounded-lg mt-3">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <i class="fas fa-envelope fa-3x"></i>
                    </div>
                    <div>
                        <h5 class="card-title mb-1 px-2">Surat Pengajuan</h5>
                        <p class="card-text mb-0 fs-4 fw-bold px-2">5</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-grey-700 bg-light shadow-sm rounded-lg mt-3">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <i class="fas fa-envelope fa-3x"></i>
                    </div>
                    <div>
                        <h5 class="card-title mb-1 px-2">Surat Perjanjian</h5>
                        <p class="card-text mb-0 fs-4 fw-bold px-2">5</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-grey-700 bg-light shadow-sm rounded-lg mt-3">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3 ">
                        <i class="fas fa-envelope fa-3x"></i>
                    </div>
                    <div>
                        <h5 class="card-title mb-1 px-2">Dokumen Penting/h5>
                        <p class="card-text mb-0 fs-4 fw-bold px-2">5</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-grey-700 bg-light shadow-sm rounded-lg mt-3">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <i class="fas fa-envelope fa-3x"></i>
                    </div>
                    <div>
                        <h5 class="card-title mb-1 px-2">Dokumen Kerja Praktek</h5>
                        <p class="card-text mb-0 fs-4 fw-bold px-2">5</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
