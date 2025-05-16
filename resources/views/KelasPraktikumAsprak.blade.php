<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Kelas Praktikum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/asprak.css') }}" rel="stylesheet" />
</head>
<body>

@include('partials.navbar')

<main class="container py-4">
    <h1 class="judul-halaman">Kelas Praktikum</h1>
    
    <div class="dropdown-container">
        <select class="form-select shadow-sm">
            <option selected disabled>Cari Mata Kuliah</option>
            <option>Basis Data</option>
            <option>Struktur Data</option>
        </select>
    </div>

    <a href="{{ route('DashboardAsprak') }}" style="text-decoration: none;">
    <div class="kelas-list">
        <div class="kelas-card">
            <h5>Basis Data - Kelas A</h5>
            <p>G1.3 | 10.00 - 12.00</p>
        </div>

        <div class="kelas-card">
            <h5>Basis Data - Kelas B</h5>
            <p>G1.3 | 10.00 - 12.00</p>
        </div>

        <div class="kelas-card">
            <h5>Basis Data - Kelas C</h5>
            <p>G1.3 | 10.00 - 12.00</p>
            </div>
    </div>
    </a>
</main>

<button class="floating-btn">
  <i class="bi bi-plus"></i>
</button>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</body>
</html>