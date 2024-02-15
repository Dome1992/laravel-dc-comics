@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Comic</h1>
    <ul>
        @foreach ($comics as $comic)

        <li>
            {{ $comic -> titolo }}:
            {{ $comic -> autore }}
            {{ $comic -> editore }}
        </li>
        @endforeach
    </ul>
@endsection
