@extends('template')

@section('pageTitle', 'Users Index')

@section('mainContent')

	@foreach ($users as $user)

		<div class="card m-5 t-5 text-center">
			<div class="card-header">
				<a href="user/show/{{$user->id}}"><h3>Username: {{$user->username}}</h3><a>
			</div>
			<div class="card-body">
					<p>Name: {{$user->name}}</p>
					<p>Email: {{$user->email}}</p>
			</div>
			<div class="card-footer">
				<h4>Privileges:{{$user->role}}</h4>
			</div>
		</div>
	@endforeach
@endsection
