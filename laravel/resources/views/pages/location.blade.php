@extends('layouts.main-layout')

@section('content')

  <h1>L O C A T I O N S</h1>
  <div>
    @foreach ($locations as $location)
      <a href="{{ route ('location-show',$location -> id)}}">
        {{$location -> name}} /
      </a>
    @endforeach
  </div>
@endsection
