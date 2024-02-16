@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Abbiamo: {{ count($comics)}} Fumetti!</h1>
    <p>Scegli il tuo preferito</p>
    <ul>
        @foreach ($comics as $comic)

        <li>
            <a href="{{ route('pippo.show', $comic -> id) }}">
            {{ $comic -> autore }}
            {{ $comic -> editore }}
            </a>
            
        </li>
        @endforeach
    </ul>
@endsection
