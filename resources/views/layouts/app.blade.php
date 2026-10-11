
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'KOMIDA')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark" style="background:#287db8">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            KOMIDA
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarKOMIDA"
            aria-controls="navbarKOMIDA"
            aria-expanded="false"
            aria-label="Buka navigasi"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarKOMIDA">
            <div class="navbar-nav ms-auto">
                <a class="nav-link text-white" href="{{ route('home') }}">
                    Home
                </a>
                <a class="nav-link text-white" href="{{ route('profil') }}">
                    Profil
                </a>
                <a class="nav-link text-white" href="{{ route('program.index') }}">
                    Program
                </a>
                <a class="nav-link text-white" href="{{ route('kontak') }}">
                    Kontak
                </a>
            </div>
        </div>

    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="text-center py-4 mt-5 bg-white">
    <p class="text-secondary mb-0">
        &copy; {{ date('Y') }} Company Profile KOMIDA
    </p>
</footer>

</body>
</html>