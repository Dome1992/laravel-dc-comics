@extends('layouts.main-layout')
@section('head')
    <title>Create</title>
@endsection
@section('content')
    
<h1>Nuovo Fumetto:</h1>

<form 
action="{{ route('creanuovofumetto.store') }}" 
method="POST"
>

    @csrf
    @method('POST')

    <label for="titolo">Titolo</label>
    <input type="text" name="titolo" id="titolo">

    <br>

    <label for="autore">Autore</label>
    <input type="text" name="autore" id="autore">

    <br>

    <label for="editore">Editore</label>
    <input type="text" name="editore" id="editore">

    <br>
    <input type="submit" value="CREA">


</form>
@endsection