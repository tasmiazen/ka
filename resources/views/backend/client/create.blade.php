@extends('backend.layouts.app')

@section('title', trans(  Route::currentRouteName()  )  )
@section('breadcrumb')
  <div class="row">
    <div class="col-md-12">
      <h1>{{ trans('clients.breadcrumb.index') }}</h1>
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="fa fa-home"></i> {{ trans('common.home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">{{ trans('clients.breadcrumb.name') }}</a></li>
        <li class="breadcrumb-item" class="active">{{ trans('clients.breadcrumb.create') }}</li>
      </ul>
    </div>
  </div>
@endsection

@section('content')

<div class="row">
	<div class="col-xl-6">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">{{ trans('clients.title.create') }}</h4>
			</div>
			<div class="card-body">


        <form method="post" action="{{ route('clients.store') }}">
          @csrf
          <div class="form-row">
            <div class="col-sm-12 mb-4 md-form md-outline">
              <label for="name">{{ trans('clients.full_name') }}</label>
              <input name="name" type="text" value="{{ old('name') }}"  class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" required>
              @if ($errors->has('name'))
                  <div class="invalid-feedback">
                  {{ $errors->first('name') }}
                 </div>
              @endif
            </div>
					</div>




          <div class="form-row">
            <div class="col-sm-12 mb-4 md-form md-outline">
              <label for="email">{{ trans('clients.email') }}</label>
              <input name="email" type="text"  value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="phone" required>
              @if ($errors->has('email'))
                  <div class="invalid-feedback">
                  {{ $errors->first('email') }}
                 </div>
              @endif
            </div>

          </div>




          <div class="form-row">
            <div class="col-sm-12 mb-4 md-form  md-outline">
              <label for="address">{{ trans('clients.address') }}</label>
              <textarea name="address" type="text"  class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" id="address">{{ old('address') }}</textarea>
              @if ($errors->has('address'))
                  <div class="invalid-feedback">
                  {{ $errors->first('address') }}
                 </div>
              @endif
            </div>

          </div>
          
          <button type="submit" class="btn btn-primary btn-sm btn-rounded" type="submit">{{ trans('common.save') }}</button>
        </form>

      </div>
    </div>
  </div>
</div>

@endsection
