@extends('backend.layouts.app')

@section('title', trans(  Route::currentRouteName()  )  )
@section('breadcrumb')
  <div class="row">
    <div class="col-md-12">
      <h1>stocks</h1>
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="fa fa-home"></i> Admin</a></li>
        <li class="breadcrumb-item"><a href="{{ route('stocks.index') }}">Stocks</a></li>
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
        <h4>Add stocks</h4>
      </div>
        <div class="card-body">
        <form action="{{ route('stocks.store') }}" method="post">
          @csrf
        <!-- Text -->
          <div class="card-text">
            
              <div class="form-group">
                <label for="raw_m">Raw Meterial Name</label>
                <select name="meterial_id" class="form-control" id="raw_m">
                  @foreach($data as  $value )
                  <option value="{{ $value->id }}">{{ $value->name }}-  ({{ $value->unit }})</option>
                  @endforeach
                </select>
              </div>


            <!-- Last Name input -->
            <div class="form-group">
              <label for="price">Unit price</label>
              <input name="price" type="text" value="{{ old('price') }}" id="price" class="form-control">
            </div>

            <!-- Phone Number input -->
            <div class="form-group">
              <label for="quantity">Quantity ({{ $value->unit }})</label>
              <input name="quantity" value="{{ old('quantity') }}" type="text" id="quantity" class="form-control">
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
