@extends('layouts.app')

@section('title', 'Admin Dashboard - EduLabIn')

@push('styles')
<style>
    .menu-item {
        display: flex;
        transition: transform 0.2s ease-in-out;
        cursor: pointer;
    }

    .menu-item:hover {
        transform: translateY(-2px);
    }

    .menu-item img[alt="Berita Acara"] {
        width: 27px;
    }

    .menu-item img[alt="Nilai Praktikan"] {
        width: 35px;
    }
</style>
@endpush

@include('partials.navbar')

@section('content')
<main class="container py-4">
    <h1 class="judul-halaman">Dashboard</h1>

    <a href="#" class="text-decoration-none">
        <div class="menu-item">
            <img src="{{ asset('img/iconAbsensiPraktikan.png') }}" alt="Absensi Praktikan" class="menu-icon">
            <span>Absensi Praktikan</span>
        </div>
    </a>

    <a href="#" class="text-decoration-none">
        <div class="menu-item">
            <img src="{{ asset('img/iconDataDiri.png') }}" alt="Data Diri Asprak" class="menu-icon">
            <span>Data Diri Asisten Praktikum</span>
        </div>
    </a>

    <a href="#" class="text-decoration-none">
        <div class="menu-item">
            <img src="{{ asset('img/iconBeritaAcara.png') }}" alt="Berita Acara" class="menu-icon">
            <span>Berita Acara</span>
        </div>
    </a>

    <a href="#" class="text-decoration-none">
        <div class="menu-item">
            <img src="{{ asset('img/iconNilaiPraktikan.png') }}" alt="Nilai Praktikan" class="menu-icon">
            <span>Nilai Praktikan</span>
        </div>
    </a>
</main>
@endsection
