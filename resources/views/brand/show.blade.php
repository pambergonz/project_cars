@extends('template')

@section('pageTitle', 'Brand Details')

@section('mainContent')


  <div class="card text-center mx-auto">
  <div class="card-header">
    <h3>Car Brand: {{$brand->brand}}</h3>
  </div>
  <ul class="list-group list-group-flush">
      @forelse ($brand->models as $model)
        <li class="list-group-item">
        Model:{{$model->model}}
      </li>
    @empty
      <p> {{$brand->brand}} hasn't released any car models yet</p>
    @endforelse
    @auth
      @if(Auth::user()->isAdmin())
    <li class="list-group-item">
    <div class="btn-group">
      <a href="/brand/edit/{{$brand->id}}"class="btn btn-primary">Update</a>

      <form class="" action='/brand/destroy/{{$brand->id}}' method="post">
        @csrf
        {{method_field('DELETE')}}
        <div class="row">
          <div class="col-6">
            <button type="delete" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </form>
    </div>
    </li>
  </ul>
</div>



@endif
@endauth

@endsection
