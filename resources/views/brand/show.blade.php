@extends('template')

@section('pageTitle', 'Brand Details')

@section('mainContent')

  <h1>Brand:{{$brand->brand}}</h1>

@auth
@if(Auth::user()->isAdmin())
  <a href="/brand/edit/{{$brand->id}}">Update or delete brand</a>
@endif
@endauth

@endsection
