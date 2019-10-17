@extends('template')

@section('pageTitle', 'Brands')

@section('mainContent')

	<h1>Brands</h1>
	<ul>
	@foreach ($brands as $brand)
			<li>
				<a href="/brand/show/{{$brand->id}}">
				{{ $brand['brand'] }}
			  </a>
			</li>
@endforeach

	</ul>

@endsection
