@extends('template')

@section('pageTitle', 'User Details')

@section('mainContent')

  <div class="card m-5 t-5 text-center">
    <div class="card-header">
      <div class="btn-group">
        <a href="/user/edit/{{$user->id}}"class="btn btn-primary">Update</a>

      <form class="" action='/user/destroy/{{$user->id}}' method="post">
      @csrf
      {{method_field('DELETE')}}
      <div class="row">
      <div class="col-6">
        <button type="delete" class="btn btn-danger">Delete</button>
      </div>
      </div>
      </form>
  </div>
    </div>
    <div class="card-body">
      <h4>Username:{{$user->username}}</h4>
        <p>Name:{{$user->name}}</p>
        <p>Email:{{$user->email}}</p>
    </div>
    <div class="card-footer">
      <h4>Privileges:{{$user->role}}</h4>

  </div>
</div>

@endsection
