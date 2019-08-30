@extends('backend.layouts.app')

@section('title', trans(  Route::currentRouteName()  )  )
@section('breadcrumb')
  <div class="row">
    <div class="col-md-12">
      <h1>Admin</h1>
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="fa fa-home"></i> Admin</a></li>
        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
        <li class="breadcrumb-item" class="active">Update</li>
      </ul>
    </div>
  </div>
@endsection

@section('content')
<div class="row">
  <div class="col-sm-12 col-md-8 col-lg-6">

    <!-- Card -->
    <div class="card">

			<div class="card-header">
        <h4>Edit User</h4>
      </div>

      <div class="card-body">
        <form action="{{ route('users.update', $data->id ) }}" method="post">
          @method('PATCH')
          @csrf

        <!-- Text -->
          <div class="card-text">

            <!-- First Name input -->
            <div class="form-group">
              <label for="name">name</label>
              <input name="name" value="{{ $data->name }}" type="text" id="name" class="form-control">
            </div>

            <!-- Last Name input -->
            <div class="form-group">
              <label for="email">Email</label>
              <input name="email" value="{{ $data->email }}" type="text" id="email" class="form-control">
            </div>

            <!-- Password input -->
            <div class="form-group">
              <label for="password">password</label>
              <input name="password"  type="password" id="password" class="form-control">
            </div>

 

            <!--Address textarea-->
            <div class="form-group">
              <label for="address">address</label>
              <textarea name="address" id="address" class="md-textarea form-control" rows="3">{{ $data->address }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-sm btn-rounded">save</button>

          </div>
        </form>
      </div>
    </div>
</div>

</div>
<!-- Card -->

@endsection
