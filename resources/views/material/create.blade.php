@extends('backend.layouts.app')

@section('title', trans(  Route::currentRouteName()  )  )
@section('breadcrumb')
  <div class="row">
    <div class="col-md-12">
      <h1>Materials</h1>
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="fa fa-home"></i> {{ trans('common.home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('rawMeterials.index') }}">Materials</a></li>
        <li class="breadcrumb-item" class="active">Create</li>
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
        <h4>Add new material</h4>
      </div>
        <div class="card-body">
        <form action="{{ route('rawMeterials.store') }}" method="post">
          @csrf
        <!-- Text -->
          <div class="card-text">

            <!-- Name input -->
            <div class="form-group">
              <label for="fname">Name</label>
              <input name="name" value="{{ old('name') }}" type="text" id="fname" class="form-control">
            </div>

            <!-- Unit input -->
            <div class="form-group">
              <label for="unit">Unit</label>
              <input name="unit" value="{{ old('unit') }}" type="text" id="unit" class="form-control">
            </div>



            <button type="submit" class="btn btn-primary">{{ trans('users.save') }}</button>

            <a href="{{ route('rawMeterials.index') }}" class="btn btn-danger">Save</a>

          </div>
        </form>
      </div>
    </div>
</div>

</div>
<!-- Card -->

@endsection
