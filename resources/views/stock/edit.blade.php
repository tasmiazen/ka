@extends('backend.layouts.app')

@section('title', trans(  Route::currentRouteName()  )  )
@section('breadcrumb')
  <div class="row">
    <div class="col-md-12">
      <h1>Stocks</h1>
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="fa fa-home"></i> {{ trans('common.home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('stocks.index') }}">Stocks</a></li>
        <li class="breadcrumb-item" class="active">Edit</li>
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
        <h4>Edit</h4>
      </div>

      <div class="card-body">
        <form action="{{ route('stocks.update', $data->id ) }}" method="post">
          @method('PATCH')
          @csrf

        <!-- Text -->
          <div class="card-text">

              <div class="form-group">
                <label for="raw_m">Raw Meterial Name</label>
                <select name="meterial_id" class="form-control" id="raw_m">
                  @foreach($meterials as  $value )
                  <option value="{{ $value->id }}">{{ $value->name }}</option>
                  @endforeach
                </select>
              </div>


            <!-- First Name input -->
            <div class="form-group">
              <label for="unit">unit</label>
              <input name="unit" value="{{ $data->unit }}" type="text" id="unit" class="form-control">
            </div>

            <!-- Last Name input -->
            <div class="form-group">
              <label for="price">Unit price</label>
              <input name="price" type="text" value="{{ $data->price }}" id="price" class="form-control">
            </div>

            <!-- Phone Number input -->
            <div class="form-group">
              <label for="quantity">quantity</label>
              <input name="quantity" value="{{ $data->quantity }}" type="text" id="quantity" class="form-control">
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
