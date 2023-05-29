@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="text-center">
            <h2>Dettagli fumetto {{ $comics['titolo'] }}</h2>
            <img src="{{ $comics['immagine'] }}" alt="">
            <p>{{ $comics['descrizione'] }}</p>
        </div>
    </div>
@endsection
