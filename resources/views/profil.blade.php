
@extends('layouts.app')

@section('title', 'Profil KOMIDA')

@section('content')
<div class="container py-5">

    {{-- Logo KOMIDA --}}
    <div class="text-center mb-4">
        <img
            src="{{ asset('images/logo-komida.png') }}"
            alt="Logo KOMIDA"
            class="img-fluid"
            style="max-width: 160px; max-height: 160px; object-fit: contain;"
        >
    </div>

    {{-- Judul Profil --}}
    <div class="text-center mb-5">
        <h1 class="fw-bold">
            {{ $konten['judul'] ?? 'Profil KOMIDA' }}
        </h1>

        <div class="mx-auto mt-3"
             style="width: 80px; height: 4px; background-color: #287db8; border-radius: 5px;">
        </div>
    </div>

    {{-- Sejarah --}}
    <section class="mb-5 mx-auto text-center" style="max-width: 900px;">
        <h2 class="fw-bold mb-3">Sejarah KOMIDA</h2>

        <p class="text-secondary lh-lg">
            {{ $konten['sejarah'] ?? 'Informasi sejarah KOMIDA.' }}
        </p>
    </section>

    {{-- Visi --}}
    <section class="mb-5 mx-auto text-center" style="max-width: 900px;">
        <h2 class="fw-bold mb-3">Visi</h2>

        <p class="text-secondary lh-lg">
            {{ $konten['visi'] ?? 'Visi KOMIDA.' }}
        </p>
    </section>

    {{-- Misi --}}
    <section class="mb-5 mx-auto text-center" style="max-width: 900px;">
        <h2 class="fw-bold mb-3">Misi</h2>

        <p class="text-secondary lh-lg">
            {{ $konten['misi'] ?? 'Misi KOMIDA.' }}
        </p>
    </section>

</div>
@endsection