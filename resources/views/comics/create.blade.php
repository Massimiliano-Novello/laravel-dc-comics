@extends('layouts.app')



@section('content')
    <div class="container">
        <h2>Aggiungi un nuovo fumetto</h2>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="titolo" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('titolo')is-invalid @enderror" id="titolo" name="titolo" 
                value="{{ old('name') }}">
                @error('titolo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="text" class="form-control @error('immagine')is-invalid @enderror" id="image" name="immagine"
                value="{{ old('image') }}">
                @error('immagine')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('descrizione')is-invalid @enderror" id="description" name="descrizione" rows="3"
                value="{{ old('description') }}"></textarea>
                @error('descrizione')
                <div class="invalid-feedback">
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control @error('prezzo')is-invalid @enderror" id="price" name="prezzo"
                value="{{ old('price') }}">
                @error('prezzo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('serie')is-invalid @enderror" id="series" name="serie"
                value="{{ old('series') }}">
                @error('serie')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="uscita" class="form-label">Uscita</label>
                <input type="date" class="form-control @error('uscita')is-invalid @enderror" id="uscita" name="uscita"
                value="{{ old('uscita') }}">
                @error('uscita')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control @error('tipo')is-invalid @enderror" id="type" name="tipo"
                value="{{ old('type') }}">
                @error('tipo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>

        </form>
    </div>
@endsection
