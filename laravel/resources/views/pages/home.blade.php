@extends('layouts.main-layout')

@section('content')

  <h1>B R A N D S</h1>
  <div>
    @foreach ($brands as $brand)

      <a href="{{ route ('brand-show',$brand -> id)}}">

        {{$brand -> name}} /

      </a>


    @endforeach
  </div>
@endsection
