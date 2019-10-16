@extends('template')

@section('pageTitle', 'Create a User')

@section('mainContent')

	<h1>Update a User</h1>

	@if (count($errors))
		<ul>
			@foreach ($errors->all() as $error)
				<li class="text-danger"> {{ $error }} </li>
			@endforeach
		</ul>
	@endif
	<form action="/user/update/{{$user->id}}" method="post" enctype="multipart/form-data">
		@csrf
		{{method_field('PUT')}}
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label>Name:</label>
						<input type="text" name="name" value="{{$user->name}}" class="form-control">
						@error('name')
							<span class="text-danger">
								{{ $message }}
							</span>
						@enderror
					</div>
				</div>

				<div class="col-6">
					<div class="form-group">
						<label>Username:</label>
						<input type="text" name="username" value="{{$user->username}}}" class="form-control">
						@error('username')
							<span class="text-danger">
								{{ $message }}
							</span>
						@enderror
					</div>
				</div>

				<div class="col-6">
					<div class="form-group">
						<label>Email:</label>
						<input type="email" name="email" value="{{ $user->email}}" class="form-control">
						@error('email')
							<span class="text-danger">
								{{ $message }}
							</span>
						@enderror
					</div>
				</div>

				<div class="col-6">
					<div class="form-group">
						<label>Password:</label>
						<input type="password" name="password" value="" class="form-control">
						@error('password')
							<span class="text-danger">
								{{ $message }}
							</span>
						@enderror
					</div>
				</div>

				<div class="col-6">
					<div class="form-group">
						<label>Password Confirm:</label>
						<input type="password" name="password_confirmation" value="" class="form-control">
						@error('password')
							<span class="text-danger">
								{{ $message }}
							</span>
						@enderror
					</div>
				</div>

				<div class="col-8">
					<div class="form-group">
						<select name="role">
							<option value="Admin">Admin</option>
							<option value="Operator">Operator</option>
						</select>
					</div>
				</div>


				<div class="col-6">
					<button type="submit" class="btn btn-success btn-block">Update</button>
				</div>
				</div>
				</form>
				<form class="" action='/user/destroy/{{$user->id}}' method="post">
				@csrf
				{{method_field('DELETE')}}
				<div class="row">
				<div class="col-6">
					<button type="delete" class="btn btn-danger btn-block">Delete</button>
				</div>
				</div>
				</form>






	@endsection
</div>
