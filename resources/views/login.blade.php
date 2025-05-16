<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: rgba(0, 40, 67, 1);
            --secondary: rgba(237, 139, 0, 1);
            --based-50: rgba(255, 255, 255, 1);
            --neutral-600: rgba(93, 93, 93, 1);
            --secondary-orange800: rgba(161, 56, 11, 1);
        }

        body {
            background-color: var(--primary);
            font-family: 'Montserrat', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .login-container {
            width: 390px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo {
            width: 299px;
            height: 89px;
            margin-bottom: 40px;
            object-fit: cover;
        }

        .form-container {
            width: 100%;
            max-width: 300px;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
            width: 100%;
            box-shadow: 0px 4px 4px rgba(117, 117, 117, 0.5);
        }

        .form-control {
            width: 100%;
            height: 50px;
            padding: 10px 20px;
            border: none;
            border-radius: 15px;
            background-color: var(--based-50);
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            color: var(--neutral-600);
            margin-bottom: 10px;
            box-shadow: 0px 4px 4px rgba(117, 117, 117, 0.5);
        }

        .form-control::placeholder {
            opacity: 0.5;
            color: var(--neutral-600);
        }

        .role-dropdown {
            width: 100%;
            margin-bottom: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 4px rgba(117, 117, 117, 0.5);
            overflow: hidden;
        }

        .role-dropdown .btn {
            height: 50px;
            padding: 10px 20px;
            background-color: var(--based-50);
            color: var(--neutral-600);
            border: none;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            outline: none;
        }

        .role-dropdown .btn:first-child {
            width: calc(100%);
            text-align: left;
        }

        .role-dropdown .dropdown-toggle-split {
            width: 50px;
            border-left: 1px solid rgba(0, 0, 0, 0.1);
        }

        .role-dropdown .dropdown-menu {
            width: 100%;
            border-radius: 15px 15px;
            border: none;
            padding: 0;
            margin-top: 0;
            box-shadow: 0px 4px 4px rgba(117, 117, 117, 0.5);
        }

        .role-dropdown .dropdown-item {
            padding: 10px 20px;
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            color: var(--neutral-600);
        }

        .role-dropdown .dropdown-item:hover {
            background-color: #f8f9fa;
        }

        .forgot-password {
            text-align: center;
            margin: 10px 0;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            color: var(--secondary);
            display: block;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .login-btn {
            display: block;
            width: 120px;
            height: 45px;
            margin: 0 auto;
            background-color: var(--secondary);
            border: 1px solid var(--secondary-orange800);
            border-radius: 10px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 16px;
            color: #000000;
            cursor: pointer;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }

        .login-link {
            color: var(--secondary);
            display: inline-block;
            font-weight: 600;
        }

        .login-text-container {
            text-align: center;
            margin: 20px 0;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
        }

        .login-link:hover {
            text-decoration: underline;
        }

        .text-secondary {
            color: var(--secondary) !important;
            display: inline;
        }

        /* .visually-hidden {
            position: absolute;
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        } */
    </style>
</head>

<body>
    <div class="login-container">
        <!-- Logo -->
        <img class="logo" src="/ImageEduLabIn/LogoEduLabIn.png" alt="EduLabInLogo">

        <!-- Login Form -->
        <div class="form-container">
            <form>

                <!-- Form Username -->
                <div>
                    <label for="Username" class="form-label"></label>
                    <input type="text" class="form-control" id="Username" placeholder="Username" required>
                </div>

                <!-- Form Password -->
                <div>
                    <label for="Password" class="form-label"></label>
                    <input type="password" class="form-control" id="Password" placeholder="Password" required>
                </div>

                <br>
                <!-- Form Role -->
                <div class="btn-group role-dropdown">
                    <button class="btn" type="button">
                        Role
                    </button>
                    <button type="button" class=" btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Asisten Praktikum</a></li>
                        <li><a class="dropdown-item" href="#">Dosen</a></li>
                        <li><a class="dropdown-item" href="#">Laboran</a></li>
                        <li><a class="dropdown-item" href="#">Praktikan</a></li>
                    </ul>
                </div>

                <!-- Forgot Password -->
                <div align="center">
                    <p><a href="#" class="forgot-password">Forgot Password</a></p>
                    <br>
                </div>

                <!-- Login Button -->
                <div align="center">
                    <br>
                    <button class="login-btn" type="submit">Login</button>
                </div>

                <!-- Route Daftar -->
                <div class="login-text-container">
                    <span class="text-secondary">Belum punya akun?</span>
                    <a href="#" class="login-link">Daftar</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>