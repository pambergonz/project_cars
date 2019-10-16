@extends('template')

@section('pageTitle', 'User Details')

@section('mainContent')

  <div class="container">
    <div class="card" style="width: 28rem;">
      <div class="card-header">
        Username:{{$user->username}}
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Name:{{$user->name}}</li>
        <li class="list-group-item">Privileges:{{$user->role}}in</li>
        <li class="list-group-item">Email:{{$user->email}}</li>
      </ul>
    </div>
  </div>
@endsection
