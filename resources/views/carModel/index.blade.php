@extends('template')

@section('pageTitle', 'Models')

@section('mainContent')

	<h1>Car Models</h1>
	<ul>
		@foreach ($carModels as $carModel)
			<li>
				<a href="/model/show/{{$carModel->id}}">{{ $carModel->model }}</a>
			</li>
		@endforeach
	</ul>
@endsection
