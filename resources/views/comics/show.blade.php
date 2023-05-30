@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="text-center">
            <h2>Dettagli fumetto {{ $comics['titolo'] }}</h2>
            <img src="{{ $comics['immagine'] }}" alt="">
            <p>{{ $comics['descrizione'] }}</p>
        </div>

        <a class="btn btn-primary" href="{{ route('comics.index') }}">Torna indietro</a>
    </div>
@endsection
