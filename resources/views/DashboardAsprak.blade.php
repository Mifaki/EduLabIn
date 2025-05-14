<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    body {
        background-color: #f6f6f6;
        padding-bottom: 100px;
    }

    .judul-halaman {
        font-size: 20px;
        padding: 20px;
        font-weight: 700;
        color: #333;
    }

    .menu-item {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 25px 20px;
        font-size: 16px;
        color: #111;
    }

    .menu-item i {
        font-size: 20px;
    }

    hr {
        border: none;
        border-top: 2px solid #eee;
        margin: 0 15px;
    }
  </style>
</head>
<body>

@include('navbar')

<main>
  <h1 class="judul-halaman">Dashboard</h1>

  <div class="menu-item">
    <img src="{{ asset('img/iconAbsensiPraktikan.png') }}" alt="Absensi Praktikan" style="width: 30px;">
    <span>Absensi Praktikan</span>
  </div>
  <hr>
  <div class="menu-item">
    <img src="{{ asset('img/iconDataDiri.png') }}" alt="Data Diri Asprak" style="width: 30px;">
    <span>Data Diri Asisten Praktikum</span>
  </div>
  <hr>
  <div class="menu-item">
    <img src="{{ asset('img/iconBeritaAcara.png') }}" alt="berita Acara" style="width: 27px;">
    <span>Berita Acara</span>
  </div>
  <hr>
  <div class="menu-item">
    <img src="{{ asset('img/iconNilaiPraktikan.png') }}" alt="Nilai Praktikan" style="width: 35px;">
    <span>Nilai Praktikan</span>
  </div>
</main>

</body>
</html>