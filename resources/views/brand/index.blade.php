@extends('template')

@section('pageTitle', 'Car Brands and Models')

@section('mainContent')

	<ul>
		@foreach ($brands as $brand)
				<h1>Car brand: {{ $brand['brand'] }}</h1>
					<h2>Models</h2>
					@foreach ($carModels as $carModel)
						<li> {{ $carModel->model }} </li>
					@endforeach
		@endforeach
	</ul>

@endsection
