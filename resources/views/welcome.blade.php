
@extends('layouts.app')

@section('content')
<section class="bg-light py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <p class="text-primary fw-bold">
                    SELAMAT DATANG DI KOMIDA
                </p>

                <h1 class="display-4 fw-bold mb-4">
                    {{ $konten['judul'] ?? 'Koperasi Mitra Dhuafa (KOMIDA)' }}
                </h1>

                <p class="lead mb-4">
                    {{ $konten['deskripsi'] ?? 'Bersama mendukung pemberdayaan ekonomi dan kesejahteraan masyarakat.' }}
                </p>

                <a href="{{ route('program.index') }}"
                   class="btn btn-primary btn-lg">
                    {{ $konten['teks_tombol'] ?? 'Lihat Program Kami' }}
                </a>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Program KOMIDA</h2>
        <p class="text-muted">
            Kenali berbagai program pemberdayaan yang kami tampilkan.
        </p>
        <a href="{{ route('program.index') }}"
           class="btn btn-outline-primary">
            Lihat Semua Program
        </a>
    </div>
</section>
@endsection