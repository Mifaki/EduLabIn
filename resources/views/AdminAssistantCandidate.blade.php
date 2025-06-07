@extends('layouts.app')
@section('title', 'Data Calon Asprak - EduLabIn')
@include('partials.navbar')

@section('content')
<main class="container py-4">
    <h1 class="page-title">Data Calon Asprak</h1>

    <select class="form-select my-4" aria-label="Cari Mata Kuliah">
        <option value="pemograman-lanjut">Pemograman Lanjut</option>
        <option value="pemograman-web-lanjut">Pemograman Web Lanjut</option>
        <option value="kemanan-jaringan">Keamanan Jaringan</option>
    </select>


    @php
        $columns = [
            ['key' => 'nim', 'label' => 'NIM'],
            ['key' => 'nama', 'label' => 'Nama'],
            ['key' => 'prodi', 'label' => 'Prodi'],
            ['key' => 'email', 'label' => 'Email'],
            ['key' => 'wa', 'label' => 'No. WA'],
            ['key' => 'kelas', 'label' => 'Pilihan Kelas Praktikum'],
            ['key' => 'tahun', 'label' => 'Tahun Ajaran']
        ];

        $data = [
            [
                'nim' => '20220801001',
                'nama' => 'John Doe',
                'prodi' => 'Teknik Informatika',
                'email' => 'john.doe@example.com',
                'wa' => '081234567890',
                'kelas' => 'Pemograman Lanjut',
                'tahun' => '2023/2024'
            ],
            [
                'nim' => '20220801002',
                'nama' => 'Jane Smith',
                'prodi' => 'Sistem Informasi',
                'email' => 'jane.smith@example.com',
                'wa' => '081234567891',
                'kelas' => 'Pemograman Web Lanjut',
                'tahun' => '2023/2024'
            ],
            [
                'nim' => '20220801003',
                'nama' => 'Bob Johnson',
                'prodi' => 'Teknik Informatika',
                'email' => 'bob.johnson@example.com',
                'wa' => '081234567892',
                'kelas' => 'Keamanan Jaringan',
                'tahun' => '2023/2024'
            ]
        ];
    @endphp

    <x-admin.data-table :columns="$columns" :data="$data" />
</main>
@endsection
