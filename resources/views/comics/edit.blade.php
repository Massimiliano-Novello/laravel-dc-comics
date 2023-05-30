@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('comics.update', $comics->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $comics->titolo}}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $comics->immagine}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $comics->descrizione}}"</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comics->prezzo}}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comics->serie}}">
            </div>
            <div class="mb-3">
                <label for="uscita" class="form-label">Uscita</label>
                <input type="date" class="form-control" id="uscita" name="uscita" value="{{ $comics->uscita}}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comics->tipo}}">
            </div>
            <button type="submit" class="btn btn-primary">Conferma</button>

        </form>
    </div>
@endsection