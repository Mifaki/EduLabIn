<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelas Praktikum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    
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

        .dropdown-container {
            padding: 0 30px 30px;
            margin-bottom: 10px;
        }

        select {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            border-radius: 10px;
            border: none;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            background: white url('img/dropdown.png') no-repeat right 15px center;
            background-size: 20px 20px;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .kelas-list {
            padding: 0 20px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .kelas-card {
            background-color: white;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border: 1.5px solid #005C99;
        }

        .kelas-card h2 {
            font-size: 16px;
            font-weight: 700;
            color: #0C2D48;
            margin-bottom: 5px;
        }

        .kelas-card p {
            font-size: 13px;
            color: #666;
        }

        .floating-btn {
            position: fixed;
            bottom: 25px;
            right: 25px;
            width: 45px;
            height: 45px;
            background-color: #ED8B00;
            color: black;
            border: none;
            border-radius: 12px;
            font-size: 28px;
            line-height: 1;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

@include('navbar')

<main>
    <h1 class="judul-halaman">Kelas Praktikum</h1>
    <div class="dropdown-container">
        <select>
            <option selected disabled>Cari Mata Kuliah</option>
            <option>Basis Data</option>
            <option>Struktur Data</option>
        </select>
    </div>
    <div class="kelas-list">
        <a href="{{ route('DashboardAsprak') }}" style="text-decoration: none;">
            <div class="kelas-card">
                <h2>Basis Data - Kelas A</h2>
                <p>G1.3 | 10.00 - 12.00</p>
            </div>
        </a>
        <a href="{{ route('DashboardAsprak') }}" style="text-decoration: none;">
            <div class="kelas-card">
                <h2>Basis Data - Kelas B</h2>
                <p>G1.3 | 10.00 - 12.00</p>
            </div>
        </a>
        <a href="{{ route('DashboardAsprak') }}" style="text-decoration: none;">
            <div class="kelas-card">
                <h2>Basis Data - Kelas C</h2>
                <p>G1.3 | 10.00 - 12.00</p>
            </div>
        </a>
        
        </div>
    </main>

    <button class="floating-btn">+</button>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>