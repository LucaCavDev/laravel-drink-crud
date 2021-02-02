@extends('layouts.main-layout')

@section('content')

    <div class="content">

        <h1>
            Inserisci un  Drink!
        </h1>


        <form action="{{ route('drink-store') }}" method="POST">
            @csrf
            @method('POST')

            <label for="name">Name:</label>
            <input name="name" type="text">

            <label for="alchol_content">Alchol_content:</label>
            <input name="alchol_content" type="text">

            <label for="price">Price:</label>
            <input name="price" type="text">

            <input type="submit" value="SALVA">
        
        
        </form>
        
    </div>

@endsection

