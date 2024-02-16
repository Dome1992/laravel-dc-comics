@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    
    <h2> 

        [
          {{ $fumetto -> id }}   
        ]
        Fumetto:
        <p><b>Titolo:</b> {{ $fumetto -> titolo }}</p>
        
        <p><b>Autore:</b>{{ $fumetto -> autore }}</p>   
        <p><b>Editore:</b>{{ $fumetto -> editore }}</p>

        
    </h2>
@endsection
