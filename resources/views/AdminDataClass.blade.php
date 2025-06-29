@extends('layouts.app')
@section('title', 'Kelas Praktikum - EduLabIn')
@include('partials.navbar')

@section('content')
<main class="container py-4">
    <h1 class="page-title">Pendataan Kelas Praktikum</h1>

    <select class="form-select mt-4" aria-label="Cari Mata Kuliah">
        <option value="pemograman-lanjut">Pemograman Lanjut</option>
        <option value="pemograman-web-lanjut">Pemograman Web Lanjut</option>
        <option value="kemanan-jaringan">Keamanan Jaringan</option>
    </select>

    <hr class="my-4">

    <div id="classCardsContainer">
        @php
            $classData = [
                [
                    'id' => 'card-1',
                    'title' => 'Pemograman Lanjut',
                    'requirements' => [
                        'Min. Semester 4',
                        'Nilai Pemograman Dasar A',
                        'IPK Min. 3,5'
                    ],
                    'classCount' => 20
                ],
                [
                    'id' => 'card-2',
                    'title' => 'Pemograman Web Lanjut',
                    'requirements' => [
                        'Min. Semester 6',
                        'Nilai Pemograman Web A',
                        'IPK Min. 3,5'
                    ],
                    'classCount' => 20
                ],
                [
                    'id' => 'card-3',
                    'title' => 'Keamanan Jaringan',
                    'requirements' => [
                        'Min. Semester 4',
                        'Nilai Keamanan Informasi A',
                        'IPK Min. 3,5'
                    ],
                    'classCount' => 18
                ],
                [
                    'id' => 'card-4',
                    'title' => 'Keamanan Jaringan',
                    'requirements' => [
                        'Min. Semester 4',
                        'Nilai Keamanan Informasi A',
                        'IPK Min. 3,5'
                    ],
                    'classCount' => 18
                ]
            ];
        @endphp

        @foreach($classData as $class)
            <x-admin.class-card
                :card-id="$class['id']"
                :title="$class['title']"
                :requirements="$class['requirements']"
                :class-count="$class['classCount']"
                :data="$class"
            />
        @endforeach
    </div>

    <!-- Template for new cards -->
    <template id="classCardTemplate">
        @php
            $templateData = [
                'id' => 'TEMPLATE_ID',
                'title' => 'TEMPLATE_TITLE',
                'requirements' => ['TEMPLATE_REQUIREMENT'],
                'classCount' => 0,
                'data' => [
                    'id' => 'TEMPLATE_ID',
                    'title' => 'TEMPLATE_TITLE',
                    'requirements' => ['TEMPLATE_REQUIREMENT'],
                    'classCount' => 0
                ]
            ];
        @endphp
        <x-admin.class-card
            :card-id="$templateData['id']"
            :title="$templateData['title']"
            :requirements="$templateData['requirements']"
            :class-count="$templateData['classCount']"
            :data="$templateData['data']"
        />
    </template>

    <button class="fab-button" onclick="openAddClassDialog()">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="12" y1="5" x2="12" y2="19"></line>
            <line x1="5" y1="12" x2="19" y2="12"></line>
        </svg>
    </button>


    <x-admin.edit-data-class-dialog />

    <x-admin.add-data-class-dialog />
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

    document.querySelector('#editClassDialog .dialog-title').textContent = cardData.title;
    const requirementsList = document.querySelector('#editClassDialog .requirements-list');
    requirementsList.innerHTML = cardData.requirements.map(req => `<p class="mb-1">• ${req}</p>`).join('');
    document.querySelector('#editClassDialog .class-count-info p').textContent = `Jumlah Kelas Praktikum: ${cardData.classCount}`;

    document.getElementById('courseName').value = cardData.title;
    document.getElementById('requirements').value = cardData.requirements.map(req => `• ${req}`).join('\n');
    document.getElementById('classCount').value = cardData.classCount;

    const modal = new bootstrap.Modal(document.getElementById('editClassDialog'));
    modal.show();
}

function updateClass() {
    if (!currentEditingCard) return;

    const courseName = document.getElementById('courseName').value;
    const requirementsText = document.getElementById('requirements').value;
    const classCount = document.getElementById('classCount').value;

    const requirements = requirementsText.split('\n')
        .map(line => line.trim())
        .filter(line => line.length > 0)
        .map(line => line.startsWith('•') ? line.substring(1).trim() : line);

    const card = document.querySelector(`[data-card-id="${currentEditingCard.id}"]`);
    if (card) {
        card.querySelector('.card-title').textContent = courseName;

        const requirementsList = card.querySelector('.card-requirements');
        const newRequirementsHTML = requirements.map(req => `<p class="requirement-item mb-1">• ${req}</p>`).join('');
        requirementsList.innerHTML = `<p class="mb-1"><strong>Ketentuan:</strong></p>${newRequirementsHTML}`;

        card.querySelector('.class-count').innerHTML = `<strong>Jumlah Kelas Praktikum: ${classCount}</strong>`;

        const updatedData = {
            ...currentEditingCard.data,
            title: courseName,
            requirements: requirements,
            classCount: parseInt(classCount)
        };
    }

    const modal = bootstrap.Modal.getInstance(document.getElementById('editClassDialog'));
    modal.hide();

    currentEditingCard = null;
}

function openAddClassDialog() {
    document.getElementById('addClassForm').reset();
    const modal = new bootstrap.Modal(document.getElementById('addClassDialog'));
    modal.show();
}

function addNewClass() {
    const courseName = document.getElementById('newCourseName').value;
    const requirementsText = document.getElementById('newRequirements').value;
    const classCount = document.getElementById('newClassCount').value;

    const requirements = requirementsText.split('\n')
        .map(line => line.trim())
        .filter(line => line.length > 0)
        .map(line => line.startsWith('•') ? line.substring(1).trim() : line);

    const newCardId = 'card-' + Date.now();
    const newCardData = {
        id: newCardId,
        title: courseName,
        requirements: requirements,
        classCount: parseInt(classCount)
    };

    const template = document.getElementById('classCardTemplate');
    const cardContainer = document.getElementById('classCardsContainer');
    const newCard = template.content.cloneNode(true);
    const cardElement = newCard.querySelector('.class-card');

    cardElement.setAttribute('data-card-id', newCardId);
    cardElement.querySelector('.card-title').textContent = courseName;

    const requirementsList = cardElement.querySelector('.card-requirements');
    const requirementsHTML = requirements.map(req => `<p class="requirement-item mb-1">• ${req}</p>`).join('');
    requirementsList.innerHTML = `<p class="mb-1"><strong>Ketentuan:</strong></p>${requirementsHTML}`;

    cardElement.querySelector('.class-count').innerHTML = `<strong>Jumlah Kelas Praktikum: ${classCount}</strong>`;

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

    const modal = bootstrap.Modal.getInstance(document.getElementById('addClassDialog'));
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
