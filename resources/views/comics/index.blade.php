@extends('layouts.app')


@section('content')
<table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Titolo</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Serie</th>
        <th scope="col">Uscita</th>
        <th scope="col">Tipo</th>
        <th scope="col">Visualizza</th>
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
              <a class="btn btn-success" href="{{route('comics.show', $comic->id)}}">
                <i class="fa-solid fa-eye"></i>
              </a>
            </td>
        </tr>
        @endforeach    
    </tbody>
  </table>
@endsection