@extends('layouts.main-layout')

@section('content')

  <h1>LOCATION</h1>

  <ul>
    <li>
      {{$location -> id}}/
      {{$location -> name}}/
      {{$location -> street}}/
      {{$location -> number_employees}}/
    </li>
  </ul>
@endsection
