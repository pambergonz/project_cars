@extends('template')

@section('pageTitle','Update a car model')

@section('mainContent')

    <h1>Update a car model</h1>

  	@if (count($errors))
  	<ul>
  		@foreach ($errors->all() as $error)
  			<li class="text-danger"> {{ $error }} </li>
  		@endforeach
  	</ul>
  @endif
  <form action="/model/update/{{$carModel->id}}" method="post" enctype="multipart/form-data">
  	@csrf
    {{ method_field('PUT') }}
    <div class="container">
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

  	<div class="row">
  		<div class="col-6">
  			<div class="form-group">
  				<label>Model:</label>
  				<input type="text" name="model" value="{{ $carModel->model}}" class="form-control">
  				@error('brand')
  					<span class="text-danger">
  						{{ $message }}
  					</span>
  				@enderror
  			</div>
  		</div>
    </div>
  		<div class="col-4">
  			 <button type="submit" class="btn btn-success btn-block">Update</button>
  		</div>


  </form>
  <form class="" action='/model/destroy/{{$carModel->id}}' method="post">
      @csrf
      {{method_field('DELETE')}}
        <div class="col-4">
          <button type="delete" class="btn btn-danger btn-block">Delete</button>
       </div>
    </form>
  </div>

  @endsection
