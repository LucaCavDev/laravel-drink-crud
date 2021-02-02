@extends('layouts.main-layout')

@section('content')

  <div class="content">

    <h1>
        HOME OF DRINKS
    </h1>

    <h2>
        <a href="{{ route('drink-create') }}">
            Crea un nuovo Drink!        
        </a>
    </h2>

    <ul>
        @foreach ($drinks as $drink)
            <li>
                <a href="{{ route('drink-show', $drink -> id) }}">
                    {{ $drink -> name }}
                </a>

                <a href="{{ route('drink-edit', $drink -> id) }}">EDIT</a>
                <a href="">DELETE</a>


            </li>
        @endforeach
    </ul>


  </div>

@endsection