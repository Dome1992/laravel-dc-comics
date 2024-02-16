@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Comic: {{ count($comics)}}</h1>
    <ul>
        @foreach ($comics as $comic)

        <li>
            <a href="
            <b>
                {{ route('pippo.show', $comic -> id) }}
                <!-- {{ $comic -> titolo }} -->
            </b>
            ">
            {{ $comic -> autore }}
            {{ $comic -> editore }}

            </a>
            
        </li>
        @endforeach
    </ul>
@endsection
