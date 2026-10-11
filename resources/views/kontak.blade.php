
@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
<div class="container py-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold">Hubungi Kami</h1>

        <p class="text-secondary mt-4">
            {{ $konten['deskripsi'] ?? 'Hubungi KOMIDA untuk informasi lebih lanjut.' }}
        </p>
    </div>

    <section class="mb-5 mx-auto text-center">
        <h2 class="fw-bold mb-3">Alamat</h2>
        <p class="text-secondary">
            {{ $konten['alamat'] ?? '-' }}
        </p>
    </section>

    <section class="mb-5 mx-auto text-center">
        <h2 class="fw-bold mb-3">Telepon</h2>
        <p class="text-secondary">
            {{ $konten['telepon'] ?? '-' }}
        </p>
    </section>

    <section class="mb-5 mx-auto text-center">
        <h2 class="fw-bold mb-3">Email</h2>
        <p class="text-secondary">
            {{ $konten['email'] ?? '-' }}
        </p>
    </section>

</div>
@endsection