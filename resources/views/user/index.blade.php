@extends('template')

@section('pageTitle', 'Users Index')

@section('mainContent')

	@foreach ($users as $user)
	<div class="card" style="width: 28rem;">
  <div class="card-header">
    {{$user->username }}
  </div>
	  <ul class="list-group list-group-flush">
	    <li class="list-group-item">Privileges:{{$user->role}}</li>
	  </ul>
	</div>
  @endforeach

@endsection
