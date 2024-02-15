@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Comic</h1>
    <ul>
        @foreach ($comics as $comic)

        <li>
            <b>
                {{ $comic -> titolo }}:
            </b>
            
            {{ $comic -> autore }}
            {{ $comic -> editore }}
        </li>
        @endforeach
    </ul>
@endsection
