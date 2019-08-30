@extends('backend.layouts.app')

@section('title', trans(  Route::currentRouteName()  )  )
@section('breadcrumb')
  <div class="row">
    <div class="col-md-12">
      <h1>Recipes</h1>
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="fa fa-home"></i> {{ trans('common.home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('recipes.index') }}">Rcipes</a></li>
        <li class="breadcrumb-item" class="active">Create</li>
      </ul>
    </div>
  </div>
@endsection


@section('content')
<div class="row">
  <div class="col-sm-12 col-md-8">

    <!-- Card -->
    <div class="card">

      <!-- Card content -->
      <div class="card-header">
        <h4>Create recipes</h4>
      </div>
        <div class="card-body">
        <form action="{{ route('recipes.store') }}" method="post" id="recipesForm">
          @csrf
        <!-- Text -->
          <div class="card-text">
            
            <!-- Name input -->
            <div class="form-group">
              <label for="name">Name</label>
              <input name="name" value="{{ old('name') }}" type="text" id="name" class="form-control">
            </div>
            <!-- Unit input -->
            <div class="form-group">
              <label for="unit">Unit</label>
              <input name="unit" value="{{ old('unit') }}" type="text" id="unit" class="form-control">
            </div>

            <!-- Quantity input -->
            <div class="form-group">
              <label for="quantity">Quantity</label>
              <input name="quantity" value="{{ old('quantity') }}" type="text" id="quantity" class="form-control">
            </div>


            <hr>


            <div id="inserInput"></div>





<div class="input-group">
  <select class="custom-select" id="add_recipyOption">
    @foreach ( $rawMeterials as $item )
<option value="{{ $item->id }}" unit="{{ $item->unit }}">{{ $item->name }} - ({{ $item->unit }})</option>
    @endforeach
  </select>
  <div class="input-group-append">
    <button class="btn btn-secondary rawAddBtn" type="button">Add</button>
  </div>
</div>

  

            <button type="submit" class="btn btn-primary">Save</button>

            <a href="{{ route('recipes.index') }}" class="btn btn-danger">Cancel</a>

          </div>
        </form>
      </div>
    </div>
</div>

</div>
<!-- Card -->

@endsection
