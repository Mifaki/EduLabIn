@extends('layouts.app')
@section('title', 'Kelas Praktikum - EduLabIn')
@include('partials.navbar')

@section('content')
    <main class="container py-4">
        <h1 class="page-title">Kelas Praktikum</h1>

        <select class="form-select my-4" aria-label="Cari Mata Kuliah">
            <option value="jaringan-komputer">Jaringan Komputer</option>
            <option value="pemrograman-web-lanjut">Pemrograman Web Lanjut</option>
            <option value="keamanan-jaringan">Keamanan Jaringan</option>
        </select>


        @php
            $columns = [
                ['key' => 'mata_kuliah', 'label' => 'Mata Kuliah'],
                ['key' => 'kelas', 'label' => 'Kelas'],
                ['key' => 'kode_enroll', 'label' => 'Kode Enroll'],
            ];

            $data = [
                [
                    'mata_kuliah' => 'Jaringan Komputer',
                    'kelas' => 'A',
                    'kode_enroll' => 'JK2025A',
                ],
                [
                    'mata_kuliah' => 'Pemrograman Web Lanjut',
                    'kelas' => 'B',
                    'kode_enroll' => 'PWL2025B',
                ],
                [
                    'mata_kuliah' => 'Keamanan Jaringan',
                    'kelas' => 'C',
                    'kode_enroll' => 'KJ2025C',
                ]
            ];
        @endphp

        <div id="class-table-container">
            <x-admin.data-table :columns="$columns" :data="$data" />
        </div>

        <button class="fab-button" onclick="openAddClassDialog()">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
        </button>

        <x-admin.add-class-dialog />
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

@push('scripts')
<script>
function openAddClassDialog() {
    document.getElementById('addClassForm').reset();
    const modal = new bootstrap.Modal(document.getElementById('addClassDialog'));
    modal.show();
}
</script>
@endpush
