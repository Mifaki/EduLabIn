@extends('layouts.app')
@section('title', 'Data Asisten Praktikum - EduLabIn')
@include('partials.navbar')

@section('content')
<main class="container py-4">
    <h1 class="page-title">Data Asisten Praktikum</h1>

    <select class="form-select my-4" aria-label="Cari Mata Kuliah">
        <option value="jaringan-komputer">Jaringan Komputer</option>
        <option value="pemrograman-web-lanjut">Pemrograman Web Lanjut</option>
        <option value="keamanan-jaringan">Keamanan Jaringan</option>
    </select>


    @php
        $columns = [
            ['key' => 'nim', 'label' => 'NIM'],
            ['key' => 'nama', 'label' => 'Nama'],
            ['key' => 'kelas', 'label' => 'Kelas Praktikum'],
            ['key' => 'jumlah', 'label' => 'Jumlah Mahasiswa'],
            ['key' => 'wa', 'label' => 'No. WA'],
            ['key' => 'ktp', 'label' => 'KTP'],
            ['key' => 'rekening', 'label' => 'No. Rek (Nama Bank)']
        ];

        $data = [
            [
                'nim' => '225150701111014',
                'nama' => 'Febia Santhika Adrin',
                'kelas' => 'Jaringan Komputer',
                'jumlah' => '40',
                'wa' => '081234567890',
                'ktp' => '12312843794631',
                'rekening' => '1300020155779 (Bank Mandiri)'
            ],
            [
                'nim' => '225150707111008',
                'nama' => 'Ahmad Faisal',
                'kelas' => 'Pemrograman Web Lanjut',
                'jumlah' => '35',
                'wa' => '08130981500720',
                'ktp' => '12312843794631',
                'rekening' => '8692304798 (Bank BCA)'
            ],
            [
                'nim' => '225150700111024',
                'nama' => 'Bob Johnson',
                'kelas' => 'Keamanan Jaringan',
                'jumlah' => '27',
                'wa' => '081234567890',
                'ktp' => '12312843794631',
                'rekening' => '121314112 (Bank Mandiri)'
            ]
        ];
    @endphp

    <x-admin.data-table :columns="$columns" :data="$data" />
</main>
@endsection
