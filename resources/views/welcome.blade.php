@extends('layouts.app')


@section('content')
    <div class="container d-flex justify-content-between align-items-center">
        <h1>Pagina home</h1>
        <a class="btn btn-primary" href="{{ route('comics.index') }}">Guarda i nostri fumtti</a>
    </div>
@endsection
