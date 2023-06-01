@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>I nostri fumetti</h1>
            <a class="btn btn-primary" href="{{ route('comics.create') }}">Aggiungi fumetti</a>
        </div>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Uscita</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Azioni</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic['id'] }}</td>
                        <td>{{ $comic['titolo'] }}</td>
                        <td>{{ $comic['prezzo'] }}</td>
                        <td>{{ $comic['serie'] }}</td>
                        <td>{{ $comic['uscita'] }}</td>
                        <td>{{ $comic['tipo'] }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('comics.show', $comic->id) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form class="d-inline-block" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
