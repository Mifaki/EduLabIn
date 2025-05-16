<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edu LabIn</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #002843;
            --secondary: #ED8B00;
            --white: #FFFFFF;
            --gray: #5D5D5D;
        }

        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background-color: var(--white);
            padding-top: 56px;
        }

        .navbar-compact {
            height: 56px;
            padding: 8px 16px;
            background-color: var(--primary) !important;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .burger-icon {
            width: 32px;
            height: 32px;
            cursor: pointer;
        }

        .navbar-brand img {
            height: 32px;
            width: auto;
        }

        .profile-toggle img {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
        }

        .menu-icon {
            width: 24px;
            height: 24px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-compact navbar-dark fixed-top shadow-sm">
        <div class="container-fluid">
            <!-- Burger menu button -->
            <button class="border-0 bg-transparent p-0 me-2"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#sidebarMenu">
                <img class="burger-icon" src="ImageEduLabIn/BurgerBarIcon.png" alt="Menu">
            </button>

            <!-- Centered logo -->
            <div class="mx-auto">
                <a class="navbar-brand" href="#">
                    <img src="ImageEduLabIn/LogoEduLabIn.png" alt="Edu LabIn">
                </a>
            </div>

            <!-- Profile toggle button -->
            <button class="profile-toggle border-0 bg-transparent p-0"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#profileMenu">
                <img src="ImageEduLabIn/IconProfil.png" alt="Profile">
            </button>
        </div>
    </nav>

    <!-- Sidebar Menu -->
    <div id="sidebar-container">

    </div>

    <!-- Profile Menu -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="profileMenu">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Profil</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="keluarSwitch">
                <label class="form-check-label" for="keluarSwitch">Keluar</label>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>