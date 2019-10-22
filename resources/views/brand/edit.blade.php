@extends('template')

@section('pageTitle','Update a brand')

@section('mainContent')

  <h1>Update a brand</h1>

  @if (count($errors))
    <ul>
      @foreach ($errors->all() as $error)
        <li class="text-danger"> {{ $error }} </li>
      @endforeach
    </ul>
  @endif
  <form action="/brand/update/{{$brand->id}}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PUT') }}
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label>Brand to update:</label>
          <input type="text" name="brand" value="{{$brand->brand}}" class="form-control">
          @error('brand')
            <span class="text-danger">
              {{ $message }}
            </span>
          @enderror
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <button type="submit" class="btn btn-success">Update</button>
      </div>
    </div>
</form>

@endsection
