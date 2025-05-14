<header class="navbar navbar-expand-lg navbar-dark">
    <style>
        .navbar {
            background-color: #0C2D48;
            height: 80px;
        }

        .container-fluid {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 20px;
        }

        .sidebar img {
            width: 30px;
        }

        .logo img {
            width: 150px;
        }

        .profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>

    <div class="container-fluid">
        <div class="sidebar">
            <img src="{{ asset('img/sidebar.png') }}" alt="Sidebar">
        </div>
        <div class="logo">
            <img src="{{ asset('img/LogoEduLabIn.png') }}" alt="Logo">
        </div>
        <div class="profile">
            <img src="{{ asset('img/profile.png') }}" alt="Profile">
        </div>
    </div>
</header>