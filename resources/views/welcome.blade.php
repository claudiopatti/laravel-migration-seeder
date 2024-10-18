@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Agenzia</th>
        <th scope="col">Stazione di Partenza</th>
        <th scope="col">Stazione di Arrivo</th>
        <th scope="col">Orario di Partenza</th>
        <th scope="col">Orario di Arrivo</th>
        <th scope="col">Codice del Treno</th>
        <th scope="col">Numero carrozze</th>
        <th scope="col">In Orario</th>
        <th scope="col">Cancellato</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
        
        <tr>
        <th scope="row">{{ $train['id'] }}</th>
        <td>{{ $train['agency'] }}</td>
        <td>{{ $train['departure_station'] }}</td>
        <td>{{ $train['arrival_station'] }}</td>
        <td>{{ $train['departure_time'] }}</td>
        <td>{{ $train['arrival_time'] }}</td>
        <td>{{ $train['train_code'] }}</td>
        <td>{{ $train['number_of_carriages'] }}</td>
        @if ($train['on_time'] == true)
            <td>SI</td>
        @else
            <td>NO</td>
        @endif
        @if ($train['cancelled'] == true)
            <td>SI</td>
        @else
            <td>NO</td>
        @endif
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
