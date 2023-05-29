@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Aggiungi un nuovo fumetto</h2>
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-3">
                <label for="uscita" class="form-label">Uscita</label>
                <input type="date" class="form-control" id="uscita" name="uscita">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>

        </form>
    </div>
@endsection