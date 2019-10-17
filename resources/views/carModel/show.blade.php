@extends('template')

@section('pageTitle', 'Model Details')

@section('mainContent')

  <h1>Car Model:{{$carModel->model}}</h1>

  @auth
  @if(Auth::user()->isAdmin())
    <a href="/model/edit/{{$carModel->id}}">Update or delete brand</a>
  @endif
  @endauth


@endsection
