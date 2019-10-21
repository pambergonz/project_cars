@extends('template')

@section('pageTitle', 'User Details')

@section('mainContent')

  <div class="card m-5 t-5 text-center">
    <div class="card-header">
      <h4>Username:{{$user->username}}</h4>
    </div>
    <div class="card-body">
        <p>Name:{{$user->name}}</p>
        <p>Email:{{$user->email}}</p>
    </div>
    <div class="card-footer">
      <h4>Privileges:{{$user->role}}</h4>
    </div>
  </div>
@endsection
