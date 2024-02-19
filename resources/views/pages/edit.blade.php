@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    <h1>
        [
            {{ $fumetto -> id }}
            EDIT FUMETTO!
        ]
    </h1>

    @if ($errors ->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <form 
action="{{ route('aggiornanuovofumetto.update', $fumetto -> id) }}" 
method="POST"
>

    @csrf
    @method('POST')

    <label for="titolo">Titolo</label>
    <input type="text" name="titolo" id="titolo" value="{{ $fumetto -> titolo }}">>

    <br>

    <label for="autore">Autore</label>
    <input type="text" name="autore" id="autore" value="{{ $fumetto -> autore }}">>

    <br>

    <label for="editore">Editore</label>
    <input type="text" name="editore" id="editore" value="{{ $fumetto -> editore }}">

    <br>
    <input type="submit" value="AGGIORNA">


</form>
@endsection