<div class="announcement-card mb-3" data-card-id="{{ $cardId }}">
    <div class="card-header d-flex justify-content-between align-items-start">
        <div class="title-section">
            <h5 class="card-title mb-0">{{ $title }}</h5>
            <div class="dotted-separator"></div>
        </div>
        <button type="button" class="btn-close" onclick="removeCard('{{ $cardId }}')" aria-label="Close">
            <img src="{{ asset('img/cross.png') }}" alt="Cross">
        </button>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-end align-items-center">
            <button type="button" class="btn btn-edit" data-card-id="{{ $cardId }}" data-card-data="{{ e(json_encode($data)) }}">
                Edit
            </button>
        </div>
    </div>
</div>

<style>
.announcement-card {
    background: #ffffff;
    border-radius: 15px;
    box-shadow: 0px 4px 4px rgba(117, 117, 117, 0.3);
    border: 1px solid;
    margin-bottom: 16px;
    overflow: hidden;
}

.card-header {
    background: transparent;
    border: none;
    padding: 20px 20px 0 20px;
}

.title-section {
    flex: 1;
}

.card-title {
    font-family: 'Montserrat', sans-serif;
    font-size: 18px;
    font-weight: 600;
    color: #333;
    line-height: 1.3;
    margin-bottom: 8px;
}

.dotted-separator {
    border-bottom: 2px dotted #ccc;
    width: 100%;
    margin-top: 8px;
}

.btn-close {
    background: none;
    border: none;
    font-size: 20px;
    color: #666;
    padding: 0;
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.btn-close:hover {
    color: #000;
}

.card-body {
    padding: 20px 20px 20px 20px;
}

.btn-edit {
    background-color: var(--secondary);
    color: white;
    border: none;
    border-radius: 8px;
    padding: 8px 16px;
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
    font-weight: 500;
    min-width: 60px;
}

.btn-edit:hover {
    background-color: var(--secondary-orange800);
    color: white;
}
</style>