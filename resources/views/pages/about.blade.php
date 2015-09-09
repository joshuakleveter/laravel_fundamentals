@extends('app')

@section('content')

<h1>About</h1>

@if(count($people))

  <h3>People I Like:</h3>

  <ul>
    @foreach ($people as $person)
      <li>{{$person}}</li>
    @endforeach
  </ul>

@endif

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis eaque tenetur illum, qui beatae consectetur tempore, laudantium voluptatibus, sed animi molestias amet ullam neque voluptatum laboriosam iste expedita a omnis.</p>

@stop
