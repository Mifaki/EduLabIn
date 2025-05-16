<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="{{ asset('css/asprak.css') }}" rel="stylesheet">
  </head>
<body>

@include('partials.navbar')

  <main class="container py-4">
    <h1 class="judul-halaman">Dashboard</h1>

    <a href="{{ route('AbsensiPraktikan') }}" class="text-decoration-none">
    <div class="menu-item">
      <img src="{{ asset('img/iconAbsensiPraktikan.png') }}" alt="Absensi Praktikan" class="menu-icon">
      <span>Absensi Praktikan</span>
    </div>
    </a>

    <div class="menu-item">
      <img src="{{ asset('img/iconDataDiri.png') }}" alt="Data Diri Asprak" class="menu-icon">
      <span>Data Diri Asisten Praktikum</span>
    </div>

    <div class="menu-item">
      <img src="{{ asset('img/iconBeritaAcara.png') }}" alt="Berita Acara" class="menu-icon" style="width: 27px;">
      <span>Berita Acara</span>
    </div>

    <div class="menu-item">
      <img src="{{ asset('img/iconNilaiPraktikan.png') }}" alt="Nilai Praktikan" class="menu-icon" style="width: 35px;">
      <span>Nilai Praktikan</span>
    </div>
  </main>

</body>
</html>
