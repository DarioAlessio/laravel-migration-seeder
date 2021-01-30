@extends('layouts.main-layout')

@section('content')

  <h1>EMPLOYEE</h1>

  <ul>
    <li>
      {{$employee -> id}}/
      {{$employee -> name}}/
      {{$employee -> lastname}}/
      {{$employee -> hire_date}}
    </li>

  </ul>
@endsection
