@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    
    <h2> 
        [
          {{ $comic -> id }}   
        ]
        Fumetto:
        {{ $comic -> titolo }}
                
        {{ $comic -> autore }}   
        {{ $comic -> editore }}
    </h2>
@endsection
