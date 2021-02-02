@extends('layouts.main-layout')

@section('content')

  <div class="content">

    <h1>
      ID: {{ $drink -> id }} <br>
      Name: {{ $drink -> name }} <br>
      Alchol Content: {{ $drink -> alchol_content }}° <br>
      Price: {{ $drink -> price }} $

    </h1>

  </div>

@endsection