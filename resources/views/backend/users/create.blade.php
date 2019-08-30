@extends('backend.layouts.app')

@section('title', trans(  Route::currentRouteName()  )  )
@section('breadcrumb')
  <div class="row">
    <div class="col-md-12">
      <h1>{{ trans('users.breadcrumb.index') }}</h1>
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="fa fa-home"></i> {{ trans('common.home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">{{ trans('users.breadcrumb.name') }}</a></li>
        <li class="breadcrumb-item" class="active">{{ trans('users.breadcrumb.create') }}</li>
      </ul>
    </div>
  </div>
@endsection


@section('content')
<div class="row">
  <div class="col-sm-12 col-md-8 col-lg-6">

    <!-- Card -->
    <div class="card">

      <!-- Card content -->
      <div class="card-header">
        <h4>{{ trans('users.create_title') }}</h4>
      </div>
        <div class="card-body">
        <form action="{{ route('users.store') }}" method="post">
          @csrf
        <!-- Text -->
          <div class="card-text">
            
            <!-- Name input -->
            <div class="form-group">
              <label for="fname">Name</label>
              <input name="name" value="{{ old('name') }}" type="text" id="fname" class="form-control">
            </div>

            <!-- Email input -->
            <div class="form-group">
              <label for="email">Email</label>
              <input name="email" value="{{ old('email') }}" type="email" id="email" class="form-control">
            </div>

            <!-- Password input -->
            <div class="form-group">
              <label for="password">password</label>
              <input name="password" type="password" id="password" class="form-control">
            </div>

            <!--Address textarea-->
            <div class="form-group">
              <label for="address">address</label>
              <textarea name="address" id="address" class="form-control" rows="3">{{ old('address') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">save</button>

          </div>
        </form>
      </div>
    </div>
</div>

</div>
<!-- Card -->

@endsection
