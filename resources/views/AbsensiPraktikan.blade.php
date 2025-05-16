<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Absensi Praktikan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/asprak.css') }}" rel="stylesheet">
</head>
<body>

@include('partials.navbar')

  <div class="container mt-4 mb-5">
  <h4 class="mb-3">Absensi Praktikan</h4>

  <!-- Filter -->
  <div class="dropdown-container">
    <select class="form-select shadow-sm">
      <option selected>Cari Pertemuan</option>
      <option value="1">Pertemuan 1</option>
      <option value="2">Pertemuan 2</option>
    </select>
  </div>

  <!-- Absensi Card -->
  <div class="absensi-card mb-4 p-0">
    <div class="absensi-header">
      <strong>Absensi Pertemuan 1</strong>
      <button class="btn btn-sm btn-light"><i class="bi bi-x-lg"></i></button>
    </div>
    <div class="p-3">
      <p><strong>Tanggal:</strong> 24 April 2026</p>
      <p><strong>Deskripsi:</strong> Materi tentang bumi itu datar</p>
      <p><strong>Foto:</strong>
        <button class="btn btn-outline-dark btn-sm ms-2">
          <i class="bi bi-file-earmark-pdf"></i> PDF
        </button>
      </p>
      <div class="text-end">
        <button class="btn btn-warning btn-sm">Edit</button>
      </div>
    </div>
  </div>

  <!-- Copy more cards as needed -->
  <div class="absensi-card mb-4 p-0">
    <div class="absensi-header">
      <strong>Absensi Pertemuan 1</strong>
      <button class="btn btn-sm btn-light"><i class="bi bi-x-lg"></i></button>
    </div>
    <div class="p-3">
      <p><strong>Tanggal:</strong> 24 April 2026</p>
      <p><strong>Deskripsi:</strong> Materi tentang bumi itu datar</p>
      <p><strong>Foto:</strong>
        <button class="btn btn-outline-dark btn-sm ms-2">
          <i class="bi bi-file-earmark-pdf"></i> PDF
        </button>
      </p>
      <div class="text-end">
        <button class="btn btn-warning btn-sm">Edit</button>
      </div>
    </div>
  </div>
</div>

<!-- Floating Button -->
<button class="floating-btn">
  <i class="bi bi-plus"></i>
</button>

<!-- Bootstrap JS + Icons -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>