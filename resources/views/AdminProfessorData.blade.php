@extends('layouts.app')
@section('title', 'Data Dosen Praktikum - EduLabIn')
@include('partials.navbar')

@section('content')
    <main class="container py-4">
        <h1 class="page-title">Data Dosen Praktikum</h1>

        <select class="form-select my-4" aria-label="Cari Mata Kuliah">
            <option value="jaringan-komputer">Jaringan Komputer</option>
            <option value="pemrograman-web-lanjut">Pemrograman Web Lanjut</option>
            <option value="keamanan-jaringan">Keamanan Jaringan</option>
        </select>


        @php
$columns = [
    ['key' => 'nip', 'label' => 'NIP'],
    ['key' => 'nama', 'label' => 'Nama'],
    ['key' => 'email', 'label' => 'Email'],
    ['key' => 'kelas', 'label' => 'Mata Kuliah Praktikum'],
    ['key' => 'prodi', 'label' => 'Prodi'],
    ['key' => 'fakultas', 'label' => 'Fakultas'],
    ['key' => 'departemen', 'label' => 'Departemen'],
];

$data = [
    [
        'nip' => '19751231 200012 1 001',
        'nama' => 'Prof. Budi Santoso',
        'email' => 'budi.santoso@univ.ac.id',
        'kelas' => 'Jaringan Komputer',
        'prodi' => 'Teknik Informatika',
        'fakultas' => 'Fakultas Ilmu Komputer',
        'departemen' => 'Teknik Informatika',
    ],
    [
        'nip' => '19800315 200604 2 002',
        'nama' => 'Prof. Siti Aminah',
        'email' => 'siti.aminah@univ.ac.id',
        'kelas' => 'Pemrograman Web Lanjut',
        'prodi' => 'Teknik Informatika',
        'fakultas' => 'Fakultas Ilmu Komputer',
        'departemen' => 'Teknik Informatika',
    ],
    [
        'nip' => '19781122 200903 1 003',
        'nama' => 'Prof. Andi Wijaya',
        'email' => 'andi.wijaya@univ.ac.id',
        'kelas' => 'Keamanan Jaringan',
        'prodi' => 'Teknik Informatika',
        'fakultas' => 'Fakultas Ilmu Komputer',
        'departemen' => 'Teknik Informatika',
    ],
    [
        'nip' => '19850510 201001 2 004',
        'nama' => 'Prof. Lina Marlina',
        'email' => 'lina.marlina@univ.ac.id',
        'kelas' => 'Jaringan Komputer',
        'prodi' => 'Teknik Informatika',
        'fakultas' => 'Fakultas Ilmu Komputer',
        'departemen' => 'Teknik Informatika',
    ],
    [
        'nip' => '19790228 200807 1 005',
        'nama' => 'Prof. Bambang Sutrisno',
        'email' => 'bambang.sutrisno@univ.ac.id',
        'kelas' => 'Pemrograman Web Lanjut',
        'prodi' => 'Teknik Informatika',
        'fakultas' => 'Fakultas Ilmu Komputer',
        'departemen' => 'Teknik Informatika',
    ]
];
        @endphp

        <x-admin.data-table :columns="$columns" :data="$data" />

         <a href="{{ route('admin.professor.create') }}" class="text-decoration-none">
            <button class="fab-button" onclick="openAddClassDialog()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
            </button>
         </a>
    </main>
@endsection

@push('styles')
    <style>
        .fab-button {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background-color: var(--secondary);
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            z-index: 1000;
        }

        .fab-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            background-color: var(--secondary-orange800);
        }

        .fab-button:active {
            transform: translateY(0);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
    </style>
@endpush