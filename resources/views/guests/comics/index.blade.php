@extends('layouts.base')

@section('content')
     <ul>
         @foreach ($comics as $comic)
        <li>{{ $comic->id }}</li>
        <li>{{ $comic->title}} </li>
        <li> {{ $comic ->price }}</li>
         @endforeach
      </ul>

@endsection
