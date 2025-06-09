<x-base-dialog
    dialog-id="addAnnouncementDialog"
    title="Tambah Pengumuman Baru"
    size="modal-dialog-centered">

    <form id="addAnnouncementForm">
        <div class="mb-3">
            <label for="newAnnouncementTitle" class="form-label">Judul Pengumuman</label>
            <input type="text" class="form-control" id="newAnnouncementTitle" required>
        </div>
        <div class="mb-3">
            <label for="newDescription" class="form-label">Deskripsi Pengumuman</label>
            <textarea class="form-control" id="newDescription" rows="8" placeholder="Masukkan Deskripsi Pengumuman" required></textarea>
        </div>
    </form>

    <x-slot name="footer">
        <button type="button" class="btn btn-update" onclick="addNewAnnouncement()">Tambah</button>
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

textarea.form-control {
    resize: vertical;
    min-height: 120px;
}

textarea.form-control::placeholder {
    color: #999;
    font-style: italic;
}
</style>