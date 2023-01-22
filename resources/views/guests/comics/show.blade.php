@extends('guests.layouts.base')
@section('content')
<h1> Il fumetto costa {{$comic ->price}}</h1>
             <ul>
                 @foreach ($comics as $comic)
                <li>{{ $comic->id }}</li>
                <li>{{ $comic->title}} </li>
                <li> {{ $comic ->price }}</li>
                 @endforeach
              </ul>
 @endsection
