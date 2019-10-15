@extends('template')

@section('pageTitle', 'Models')

@section('mainContent')

	<h1>Models</h1>
	<ul>
		@foreach ($models as $model)
			<li>
				{{ $model->model }}
			</li>
		@endforeach
	</ul>
@endsection
