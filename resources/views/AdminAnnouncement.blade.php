@extends('layouts.app')
@section('title', 'Pengumuman - EduLabIn')
@include('partials.navbar')

@section('content')
<main class="container py-4">
    <h1 class="page-title">Pengumuman</h1>

    <select class="form-select mt-4" aria-label="Cari Pengumuman">
        <option value="all" selected>Cari Pengumuman</option>
    </select>

    <hr class="my-4">

    <div id="announcementCardsContainer">
        @php
            $announcementData = [
                [
                    'id' => 'card-1',
                    'title' => 'Pembukaan Rekruitmen Untuk Semester Genap Tahun Ajaran 2025/2026',
                    'description' => 'Deskripsi pengumuman akan ditampilkan di sini'
                ],
                [
                    'id' => 'card-2',
                    'title' => 'Pembukaan Rekruitmen Untuk Semester Genap Tahun Ajaran 2025/2026',
                    'description' => 'Deskripsi pengumuman akan ditampilkan di sini'
                ],
                [
                    'id' => 'card-3',
                    'title' => 'Pembukaan Rekruitmen Untuk Semester Genap Tahun Ajaran 2025/2026',
                    'description' => 'Deskripsi pengumuman akan ditampilkan di sini'
                ],
                [
                    'id' => 'card-4',
                    'title' => 'Pembukaan Rekruitmen Untuk Semester Genap Tahun Ajaran 2025/2026',
                    'description' => 'Deskripsi pengumuman akan ditampilkan di sini'
                ]
            ];
        @endphp

        @foreach($announcementData as $announcement)
            <x-admin.announcement-card
                :card-id="$announcement['id']"
                :title="$announcement['title']"
                :description="$announcement['description'] ?? ''"
                :data="$announcement"
            />
        @endforeach
    </div>

    <!-- Template for new cards -->
    <template id="announcementCardTemplate">
        @php
            $templateData = [
                'id' => 'TEMPLATE_ID',
                'title' => 'TEMPLATE_TITLE',
                'description' => 'TEMPLATE_DESCRIPTION',
                'data' => [
                    'id' => 'TEMPLATE_ID',
                    'title' => 'TEMPLATE_TITLE',
                    'description' => 'TEMPLATE_DESCRIPTION',
                ]
            ];
        @endphp
        <x-admin.announcement-card
            :card-id="$templateData['id']"
            :title="$templateData['title']"
            :data="$templateData['data']"
        />
    </template>

    <button class="fab-button" onclick="openAddAnnouncementDialog()">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="12" y1="5" x2="12" y2="19"></line>
            <line x1="5" y1="12" x2="19" y2="12"></line>
        </svg>
    </button>

    <x-admin.edit-announcement-dialog />

    <x-admin.add-announcement-dialog />
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
let currentEditingCard = null;

function removeCard(cardId) {
    const card = document.querySelector(`[data-card-id="${cardId}"]`);
    if (card) {
        card.style.transition = 'opacity 0.3s ease-out, transform 0.3s ease-out';
        card.style.opacity = '0';
        card.style.transform = 'translateX(100%)';

        setTimeout(() => {
            card.remove();
        }, 300);
    }
}

function editCard(cardId, cardData) {
    currentEditingCard = {
        id: cardId,
        data: cardData
    };

    document.querySelector('#editAnnouncementDialog .dialog-title').textContent = cardData.title;

    document.getElementById('announcementTitle').value = cardData.title;
    document.getElementById('announcementDescription').value = cardData.description || '';

    const modal = new bootstrap.Modal(document.getElementById('editAnnouncementDialog'));
    modal.show();
}

function updateAnnouncement() {
    if (!currentEditingCard) return;

    const announcementTitle = document.getElementById('announcementTitle').value;
    const announcementDescription = document.getElementById('announcementDescription').value;

    const card = document.querySelector(`[data-card-id="${currentEditingCard.id}"]`);
    if (card) {
        card.querySelector('.card-title').textContent = announcementTitle;
        
        const descriptionElement = card.querySelector('.card-description');
        if (descriptionElement) {
            descriptionElement.textContent = announcementDescription;
        }

        const updatedData = {
            ...currentEditingCard.data,
            title: announcementTitle,
            description: announcementDescription
        };

        const editButton = card.querySelector('.btn-edit');
        if (editButton) {
            editButton.setAttribute('data-card-data', JSON.stringify(updatedData));
        }
    }

    const modal = bootstrap.Modal.getInstance(document.getElementById('editAnnouncementDialog'));
    modal.hide();

    currentEditingCard = null;
}

function openAddAnnouncementDialog() {
    document.getElementById('addAnnouncementForm').reset();
    const modal = new bootstrap.Modal(document.getElementById('addAnnouncementDialog'));
    modal.show();
}

function addNewAnnouncement() {
    const announcementTitle = document.getElementById('newAnnouncementTitle').value;
    const announcementDescription = document.getElementById('newDescription').value;

    if (!announcementTitle.trim() || !announcementDescription.trim()) {
        alert('Please fill in all fields');
        return;
    }

    const newCardId = 'card-' + Date.now();
    const newCardData = {
        id: newCardId,
        title: announcementTitle,
        description: announcementDescription
    };

    const template = document.getElementById('announcementCardTemplate');
    const cardContainer = document.getElementById('announcementCardsContainer');
    const newCard = template.content.cloneNode(true);
    const cardElement = newCard.querySelector('.announcement-card');

    cardElement.setAttribute('data-card-id', newCardId);
    cardElement.querySelector('.card-title').textContent = announcementTitle;

    const editButton = cardElement.querySelector('.btn-edit');
    editButton.setAttribute('data-card-id', newCardId);
    editButton.setAttribute('data-card-data', JSON.stringify(newCardData));

    const closeButton = cardElement.querySelector('.btn-close');
    closeButton.setAttribute('onclick', `removeCard('${newCardId}')`);

    cardElement.style.opacity = '0';
    cardElement.style.transform = 'translateX(100%)';
    cardContainer.appendChild(newCard);

    requestAnimationFrame(() => {
        cardElement.style.transition = 'opacity 0.3s ease-out, transform 0.3s ease-out';
        cardElement.style.opacity = '1';
        cardElement.style.transform = 'translateX(0)';
    });

    const modal = bootstrap.Modal.getInstance(document.getElementById('addAnnouncementDialog'));
    modal.hide();
}

document.addEventListener('click', function(event) {
    if (event.target.classList.contains('btn-edit')) {
        const cardId = event.target.dataset.cardId;
        const encodedCardData = event.target.dataset.cardData;

        const textarea = document.createElement('textarea');
        textarea.innerHTML = encodedCardData;
        const unescapedCardData = textarea.value;

        try {
            const cardData = JSON.parse(unescapedCardData);
            editCard(cardId, cardData);
        } catch (e) {
            console.error('Error parsing JSON for card:', cardId, e);
            console.error('Encoded data:', encodedCardData);
            console.error('Unescaped data:', unescapedCardData);
        }
    }
});
</script>
@endpush
