@extends('template')

@section('pageTitle', 'Brands')

@section('mainContent')

	<h1>Brands</h1>
	<ul>
		@foreach ($brands as $brand)
			<li>
				{{ $brand['brand'] }}
			</li>
		@endforeach
	</ul>

@endsection
