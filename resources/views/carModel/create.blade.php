@extends('template')

@section('pageTitle', 'Create a Car Model')

@section('mainContent')

	<h1>Create a car Model</h1>

	@if (count($errors))
		<ul>
			@foreach ($errors->all() as $error)
				<li class="text-danger"> {{ $error }} </li>
			@endforeach
		</ul>
	@endif
	<form action="/model/store" method="post" enctype="multipart/form-data">
		@csrf

		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<label>Model:</label>
					<input type="text" name="model" value="{{ $errors->has('model') ? null : old('model') }}" class="form-control">
					@error('model')
						<span class="text-danger">
							{{ $message }}
						</span>
					@enderror
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<select class="form-control" name="brand_id">
						<option value="">Select a brand</option>
						@foreach ($brands as $brand)
							<option value={{$brand->id}}>{{$brand->brand}}</option>
						@endforeach
					</select>
					@error('brand_id')
						<span class="text-danger">
							{{ $message }}
						</span>
					@enderror
				</div>
			</div>
		</div>


		<div class="col-12">
			<button type="submit" class="btn btn-success">Submit</button>
		</div>

	@endsection
