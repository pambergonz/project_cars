@extends('template')

@section('pageTitle', 'Create a User')

@section('mainContent')

	<h1>Create a User</h1>

	@if (count($errors))
		<ul>
			@foreach ($errors->all() as $error)
				<li class="text-danger"> {{ $error }} </li>
			@endforeach
		</ul>
	@endif
	<form action="/user/store" method="post" enctype="multipart/form-data">
		@csrf
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label>Name:</label>
						<input type="text" name="name" value="{{ $errors->has('name') ? null : old('name') }}" class="form-control">
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
						<input type="text" name="username" value="{{ $errors->has('username') ? null : old('username') }}" class="form-control">
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
						<input type="email" name="email" value="{{ $errors->has('email') ? null : old('email') }}" class="form-control">
						@error('name')
							<span class="text-danger">
								{{ $message }}
							</span>
						@enderror
					</div>
				</div>

				<div class="col-6">
					<div class="form-group">
						<label>Password:</label>
						<input type="password" name="password" value="{{ $errors->has('password') ? null : old('password') }}" class="form-control">
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
						<input type="password" name="password_confirmation" value="{{ $errors->has("password-confirm") ? null : old("password-confirm") }}" class="form-control">
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
				<div class="col-12">
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
			</div>
		</form>

	@endsection
