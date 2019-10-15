@extends('template')

@section('pageTitle', 'Models')

@section('mainContent')

	<h1>Car Models</h1>
	<ul>
		@foreach ($carModels as $carModel)
			<li>
				{{ $carModel->model }}
			</li>
		@endforeach
	</ul>
@endsection
