@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Abbiamo: {{ count($comics)}} Fumetti!</h1>
    <p>Scegli il tuo preferito</p>
    <br>
    <a href="{{ route('creanuovofumetto.create') }}">CREA FUMETTO</a>
    <br><br>
    <ul>
        @foreach ($comics as $comic)

        <li>
            <a href="{{ route('dettagliofumetto.show', $comic -> id) }}">
            {{ $comic -> autore }}
            {{ $comic -> editore }}
            </a>
            
        </li>
        @endforeach
    </ul>
@endsection
