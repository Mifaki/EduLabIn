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

        .menu-item img[alt="Data Calon Asprak"] {
            width: 24px;
        }
    </style>
@endpush

@include('partials.navbar')

@section('content')
    <main class="container py-4">
        <h1>Dashboard</h1>

        <a href="{{ route('admin.class') }}" class="text-decoration-none">
            <div class="menu-item">
                <img src="{{ asset('img/iconKelasPraktikum.png') }}" alt="Kelas Praktikum" class="menu-icon">
                <span>Kelas Praktikum</span>
            </div>
        </a>

        <a href="{{ route('admin.dataClass') }}" class="text-decoration-none">
            <div class="menu-item">
                <img src="{{ asset('img/iconPendataan.png') }}" alt="Pendataan Kelaas Praktikum" class="menu-icon">
                <span>Pendataan</span>
            </div>
        </a>

        <a href="{{ route('admin.announcement') }}" class="text-decoration-none">
            <div class="menu-item">
                <img src="{{ asset('img/iconPengumuman.png') }}" alt="Pengumuman" class="menu-icon">
                <span>Pengumuman</span>
            </div>
        </a>

        <a href="{{ route('admin.assistantData') }}" class="text-decoration-none">
            <div class="menu-item">
                <img src="{{ asset('img/iconDataAsistenPraktikum.png') }}" alt="Data Asisten Praktikum" class="menu-icon">
                <span>Data Asisten Praktikum</span>
            </div>
        </a>

        <a href="{{ route('admin.assistantCandidate') }}" class="text-decoration-none">
            <div class="menu-item">
                <img src="{{ asset('img/iconDataAsprak.jpg') }}" alt="Data Calon Asprak" class="menu-icon">
                <span>Data Calon Asisten Praktikum</span>
            </div>
        </a>

        <a href="{{ route('admin.professor.data') }}" class="text-decoration-none">
            <div class="menu-item">
                <img src="{{ asset('img/iconDataCalonAsprak.png') }}" alt="Data Dosen Praktikum" class="menu-icon">
                <span>Data Dosen Praktikum</span>
            </div>
        </a>
    </main>
@endsection