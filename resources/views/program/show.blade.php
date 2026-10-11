
@extends('layouts.app')

@section('title', $program->nama)

@section('content')
<div class="container py-5">

    <a href="{{ route('program.index') }}"
       class="btn btn-outline-primary mb-4">
        &larr; Kembali ke Program
    </a>

    <div class="row g-4">
        <div class="col-md-6">
            <img
                src="{{ asset($program->gambar) }}"
                alt="{{ $program->nama }}"
                class="img-fluid rounded shadow-sm w-100"
            >
        </div>

        <div class="col-md-6">
            <span class="badge bg-success">
                {{ $program->status }}
            </span>

            <h1 class="fw-bold mt-3">{{ $program->nama }}</h1>
            <p>{{ $program->deskripsi }}</p>

            <hr>

            <p><strong>Kategori:</strong> {{ $program->kategori }}</p>
            <p><strong>Tujuan:</strong> {{ $program->tujuan }}</p>
            <p><strong>Sasaran:</strong> {{ $program->sasaran }}</p>
            <p><strong>Lokasi:</strong> {{ $program->lokasi }}</p>
        </div>
    </div>

</div>
@endsection