@extends('layouts.main-layout')

@section('content')

  <h1>E M P L O Y E E</h1>
  <div>
    @foreach ($employees as $employee)

      <a href="{{ route ('employee-show',$employee -> id)}}">

        {{$employee -> name}}
        {{$employee -> lastname}}/

      </a>


    @endforeach
  </div>
@endsection
