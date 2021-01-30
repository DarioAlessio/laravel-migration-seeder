@extends('layouts.main-layout')

@section('content')

  <h1>B R A N D S</h1>

  <ul>
    <li>
      {{$brand -> id}}/
      {{$brand -> logo}}/
      {{$brand -> number_locations}}
    </li>

  </ul>
@endsection
