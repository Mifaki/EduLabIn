<x-base-dialog dialog-id="addClassDialog" title="Tambah Kelas Praktikum Baru" size="modal-dialog-centered">

    <form id="addClassForm">
        <div class="mb-3">
            <label for="newClassMataKuliah" class="form-label">Mata Kuliah</label>
            <select class="form-select" id="newClassMataKuliah" required>
                <option value="">Pilih Mata Kuliah</option>
                <option value="Jaringan Komputer">Jaringan Komputer</option>
                <option value="Pemrograman Web Lanjut">Pemrograman Web Lanjut</option>
                <option value="Keamanan Jaringan">Keamanan Jaringan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="newClassKelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="newClassKelas" placeholder="Masukkan Kelas (misal: A, B, C)"
                required>
        </div>
        <div class="mb-3">
            <label for="newClassKodeEnroll" class="form-label">Kode Enroll</label>
            <input type="text" class="form-control" id="newClassKodeEnroll" placeholder="Masukkan Kode Enroll" required>
        </div>
    </form>

    <x-slot name="footer">
        <button type="button" class="btn btn-update" onclick="closeAddClassDialog()">Tambah</button>
    </x-slot>
</x-base-dialog>

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

    .btn-update {
        background-color: var(--secondary);
        color: white;
        border: none;
        border-radius: 8px;
        padding: 10px 24px;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-weight: 500;
        min-width: 80px;
    }

    .btn-update:hover {
        background-color: var(--secondary-orange800);
        color: white;
    }
</style>
<script>
    function closeAddClassDialog() {
        const modal = bootstrap.Modal.getInstance(document.getElementById('addClassDialog'));
        modal.hide();
    }
</script>