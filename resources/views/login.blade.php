@extends('layouts.app')

@section('title', 'Login - EduLabIn')

@push('styles')
<style>
    body {
        background-color: var(--primary);
    }

    .login-container {
        width: 390px;
        padding: 20px;
    }

    .logo {
        width: 299px;
        height: 89px;
        margin-bottom: 40px;
        object-fit: cover;
    }

    .form-container {
        max-width: 300px;
    }

    .forgot-password {
        color: var(--secondary);
    }

    .login-btn {
        background-color: var(--secondary);
        border: 1px solid var(--secondary-orange800);
        border-radius: 10px;
        font-weight: 600;
        color: #000000;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        height: 50px;
        width: 120px;
    }

    .login-link {
        color: var(--secondary);
        font-weight: 600;
    }

    .container {
        min-height: 100vh;
    }
</style>
@endpush

@section('content')
<div class="d-flex justify-content-center align-items-center container">
    <div class="login-container d-flex flex-column align-items-center">
        <img class="logo" src="/img/LogoEduLabIn.png" alt="EduLabInLogo">

        <div class="form-container w-100">
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" id="Username" placeholder="Username" required>
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control" id="Password" placeholder="Password" required>
                </div>

                <div class="mb-4">
                    <select class="form-select" aria-label="Select Role">
                        <option selected disabled>Role</option>
                        <option value="asisten">Asisten Praktikum</option>
                        <option value="dosen">Dosen</option>
                        <option value="laboran">Laboran</option>
                        <option value="praktikan">Praktikan</option>
                    </select>
                </div>

                <div class="text-center mb-4">
                    <a href="#" class="forgot-password text-decoration-none">Forgot Password</a>
                </div>

                <div class="text-center mb-4">
                    <button class="login-btn" type="submit">Login</button>
                </div>

                <div class="text-center">
                    <span class="text-secondary">Belum punya akun?</span>
                    <a href="#" class="login-link text-decoration-none">Daftar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
