
@extends('layouts.app')

@section('title', 'Program KOMIDA')

@section('content')
<div class="container py-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold">Program & Pemberdayaan</h1>
        <p class="text-secondary">
            Mengenal program dan kegiatan Koperasi Mitra Dhuafa
        </p>
    </div>

    {{-- Daftar program --}}
    <div class="row g-4" id="programSlider">
        @forelse ($programs as $program)
            <div class="col-md-6 col-lg-4 program-item">
                <div class="card h-100 border-0 shadow-sm">

                    <img
                        src="{{ asset($program->gambar) }}"
                        alt="{{ $program->nama }}"
                        class="card-img-top"
                        style="height:220px; object-fit:cover;"
                    >

                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-success align-self-start">
                            {{ $program->status }}
                        </span>

                        <h5 class="fw-bold mt-3">
                            {{ $program->nama }}
                        </h5>

                        <p class="text-secondary small">
                            {{ $program->kategori }}
                        </p>

                        <p>{{ $program->deskripsi }}</p>

                        <a
                            href="{{ route('program.show', $program->slug) }}"
                            class="btn btn-primary mt-auto"
                        >
                            Lihat Detail
                        </a>
                    </div>

                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p>Data program belum tersedia.</p>
            </div>
        @endforelse
    </div>

    {{-- Navigasi slider --}}
    <div
        id="programPagination"
        class="d-flex justify-content-center align-items-center flex-wrap gap-2 mt-5"
    ></div>

</div>

<style>
    #programPagination .page-button {
        min-width: 40px;
        height: 40px;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        background: #fff;
        color: #212529;
        cursor: pointer;
        transition: all .2s ease;
    }

    #programPagination .page-button:hover {
        background: #e9f1ff;
        border-color: #0d6efd;
        color: #0d6efd;
    }

    #programPagination .page-button.active {
        background: #0d6efd;
        border-color: #0d6efd;
        color: #fff;
    }

    #programPagination .page-button:disabled {
        opacity: .4;
        cursor: not-allowed;
    }

    .program-item {
        animation: programFade .3s ease;
    }

    @keyframes programFade {
        from {
            opacity: 0;
            transform: translateY(8px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const items = Array.from(
        document.querySelectorAll('#programSlider .program-item')
    );

    const pagination = document.getElementById('programPagination');

    const itemsPerPage = 6;
    const totalPages = Math.ceil(items.length / itemsPerPage);
    let currentPage = 1;

    // Jika jumlah program tidak lebih dari 6,
    // tombol navigasi tidak perlu ditampilkan.
    if (totalPages <= 1) {
        pagination.style.display = 'none';
        return;
    }

    function createButton(label, onClick, options = {}) {
        const button = document.createElement('button');

        button.type = 'button';
        button.className = 'page-button';

        if (options.active) {
            button.classList.add('active');
            button.setAttribute('aria-current', 'page');
        }

        button.textContent = label;
        button.disabled = Boolean(options.disabled);
        button.setAttribute('aria-label', options.ariaLabel || label);
        button.addEventListener('click', onClick);

        return button;
    }

    function showPage(page) {
        currentPage = page;

        const start = (currentPage - 1) * itemsPerPage;
        const end = start + itemsPerPage;

        items.forEach(function (item, index) {
            item.hidden = !(index >= start && index < end);
        });

        pagination.replaceChildren();

        // Tombol sebelumnya
        pagination.appendChild(
            createButton('‹', function () {
                if (currentPage > 1) {
                    showPage(currentPage - 1);
                }
            }, {
                disabled: currentPage === 1,
                ariaLabel: 'Program sebelumnya'
            })
        );

        // Tombol angka dibuat otomatis sesuai jumlah program
        for (let page = 1; page <= totalPages; page++) {
            pagination.appendChild(
                createButton(String(page), function () {
                    showPage(page);
                }, {
                    active: page === currentPage,
                    ariaLabel: 'Halaman ' + page
                })
            );
        }

        // Tombol berikutnya
        pagination.appendChild(
            createButton('›', function () {
                if (currentPage < totalPages) {
                    showPage(currentPage + 1);
                }
            }, {
                disabled: currentPage === totalPages,
                ariaLabel: 'Program berikutnya'
            })
        );
    }

    showPage(1);
});
</script>
@endsection