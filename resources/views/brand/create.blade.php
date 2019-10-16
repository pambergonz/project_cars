@extends('template')

@section('pageTitle', 'Create a Brand')

@section('mainContent')

	<h1>Create a brand</h1>

	@if (count($errors))
		<ul>
			@foreach ($errors->all() as $error)
				<li class="text-danger"> {{ $error }} </li>
			@endforeach
		</ul>
	@endif
	<form action="/brand/store" method="post" enctype="multipart/form-data">
		@csrf
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label>Brand:</label>
						<input type="text" name="brand" value="{{ $errors->has('brand') ? null : old('brand') }}" class="form-control">
						@error('brand')
							<span class="text-danger">
								{{ $message }}
							</span>
						@enderror
					</div>
				</div>
				<div class="col-12">
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
			</div>
		</form>

	@endsection
