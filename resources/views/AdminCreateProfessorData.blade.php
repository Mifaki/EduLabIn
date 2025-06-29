@extends('layouts.app')
@section('title', 'TambahData Dosen Praktikum - EduLabIn')
@include('partials.navbar')

@section('content')
    <main class="container py-4">
        <h1 class="page-title">Tambah Data Dosen Praktikum</h1>

        <form id="addClassForm">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" id="nip" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="course" class="form-label">Mata Kuliah</label>
                <input type="text" class="form-control" id="course" required>
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">Kelas</label>
                <select class="form-select" id="class" required>
                    <option value="">Pilih Kelas</option>
                    <option value="Jaringan Komputer">A</option>
                    <option value="Pemrograman Web Lanjut">B</option>
                    <option value="Keamanan Jaringan">C</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="studyProgram" class="form-label">Progam Studi</label>
                <input type="text" class="form-control" id="studyProgram" required>
            </div>
            <div class="mb-3">
                <label for="faculty" class="form-label">Fakultas</label>
                <input type="text" class="form-control" id="faculty" required>
            </div>
            <div class="mb-3">
                <label for="departement" class="form-label">Departemen</label>
                <input type="text" class="form-control" id="departement" required>
            </div>

            <div class="mb-3">
                <div class="upload-container">
                    <div class="upload-header">Upload Foto Diri</div>
                    <label for="fotoDiri" class="upload-box" id="uploadBox">
                        <span id="uploadIcon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                <polyline points="17 8 12 3 7 8"/>
                                <line x1="12" y1="3" x2="12" y2="15"/>
                            </svg>
                        </span>
                        <img id="previewImage" src="#" alt="Preview" style="display:none; max-height:100px; max-width:100%; object-fit:contain; border-radius:8px;" />
                        <button type="button" id="removeImageBtn" style="display:none; position:absolute; top:8px; right:8px; background:#fff; border:none; border-radius:50%; box-shadow:0 2px 6px rgba(0,0,0,0.15); width:24px; height:24px; cursor:pointer; align-items:center; justify-content:center; padding:0;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                        </button>
                        <input type="file" id="fotoDiri" name="fotoDiri" accept="image/*" style="display:none;">
                    </label>
                </div>
            </div>

            <button type="submit" class="btn">Submit</button>
        </form>
    </main>
@endsection

@push('styles')
    <style>
        .form-label {
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 500;
            color: #333;
            margin-bottom: 8px;
        }

        .form-control,
        .form-control:focus {
            box-shadow: none;
            border: 1px solid #ddd;
        }

        .btn {
            background-color: var(--secondary);
            color: white;
            width: 100%;
            margin-top: 24px;
            border: none;
            border-radius: 8px;
            padding: 10px 24px;
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 500;
            min-width: 80px;
        }

        .btn:hover {
            background-color: var(--secondary-orange800);
            color: white;
        }

        .upload-container {
            border: 2px solid #ddd;
            border-radius: 10px;
            padding: 0;
            margin-top: 16px;
            background: #fff;
            width: 100%;
        }
        .upload-header {
            background: var(--secondary, orange);
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 600;
            padding: 8px 16px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .upload-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 120px;
            cursor: pointer;
            background: #fff;
            position: relative;
            overflow: hidden;
        }
        .upload-box img {
            margin-top: 12px;
        }
        #removeImageBtn {
            display: flex;
        }
    </style>
@endpush

@push('scripts')
<script>
document.getElementById('fotoDiri').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('previewImage');
    const icon = document.getElementById('uploadIcon');
    const removeBtn = document.getElementById('removeImageBtn');
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
            icon.style.display = 'none';
            removeBtn.style.display = 'flex';
        };
        reader.readAsDataURL(file);
    } else {
        preview.src = '#';
        preview.style.display = 'none';
        icon.style.display = 'block';
        removeBtn.style.display = 'none';
    }
});
document.getElementById('removeImageBtn').addEventListener('click', function(e) {
    e.preventDefault();
    const fileInput = document.getElementById('fotoDiri');
    const preview = document.getElementById('previewImage');
    const icon = document.getElementById('uploadIcon');
    const removeBtn = document.getElementById('removeImageBtn');
    fileInput.value = '';
    preview.src = '#';
    preview.style.display = 'none';
    icon.style.display = 'block';
    removeBtn.style.display = 'none';
});
document.getElementById('addClassForm').addEventListener('submit', function(e) {
    e.preventDefault();
    window.location.href = "{{ route('admin.professor.data') }}";
});
</script>
@endpush
