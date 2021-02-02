@extends('layouts.main-layout')

@section('content')
    <h1>Drink Edit:</h1>

    <form action="{{ route('drink-update', $drink -> id) }}" method="POST">
        @csrf
        @method('POST')

        <label for="name">Name:</label>
        <input name="name" type="text" value="{{ $drink -> name }}">

        <label for="alchol_content">Alchol_content:</label>
        <input name="alchol_content" type="text" value="{{ $drink -> alchol_content }}">

        <label for="price">Price:</label>
        <input name="price" type="text" value="{{ $drink -> price }}">

        <input type="submit" value="AGGIORNA">
    
    
    </form>

@endsection