@props(['data' => [], 'columns' => []])

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                @foreach($columns as $column)
                    <th>{{ $column['label'] }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
                <tr>
                    @foreach($columns as $column)
                        <td>{{ $row[$column['key']] ?? '' }}</td>
                    @endforeach
                </tr>
            @endforeach

            @php
                $emptyRows = max(0, 30 - count($data));
            @endphp

            @for($i = 0; $i < $emptyRows; $i++)
                <tr>
                    @foreach($columns as $column)
                        <td></td>
                    @endforeach
                </tr>
            @endfor
        </tbody>
    </table>
</div>

<style>
.table-responsive {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    margin: 0 -1rem;
    padding: 0 1rem;
}

.table {
    width: 100%;
    margin-bottom: 1rem;
    border-collapse: collapse;
    min-width: 800px;
}

.table th {
    background-color: var(--secondary);
    color: white;
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
    font-weight: 600;
    padding: 12px 16px;
    text-align: left;
    white-space: nowrap;
    border: 1px solid #ddd;
}

.table td {
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
    color: #333;
    padding: 12px 16px;
    border: 1px solid #ddd;
    white-space: nowrap;
}

.table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

.table tbody tr:hover {
    background-color: #f5f5f5;
}

/* Custom scrollbar for the table container */
.table-responsive::-webkit-scrollbar {
    height: 8px;
}

.table-responsive::-webkit-scrollbar-track {
    background: #f1f1f1;
}

.table-responsive::-webkit-scrollbar-thumb {
    background: var(--secondary);
}

.table-responsive::-webkit-scrollbar-thumb:hover {
    background: var(--secondary-orange800);
}
</style>
