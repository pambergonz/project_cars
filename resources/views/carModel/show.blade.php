@extends('template')

@section('pageTitle', 'Model Details')

@section('mainContent')


  <div class="card text-center mx-auto">
  <div class="card-header">
    <h3>Car Model: {{$carModel->model}}</h3>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
      <h4>Car brand: {{$carModel->brand->brand}}</h4>
    </li>
    @auth
      @if(Auth::user()->isAdmin())
    <li class="list-group-item">
    <div class="btn-group">
      <a href="/model/edit/{{$carModel->id}}"class="btn btn-primary">Update</a>

      <form class="" action='/model/destroy/{{$carModel->id}}' method="post">
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
