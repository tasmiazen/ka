@extends('backend.layouts.app')

@section('title', trans(  Route::currentRouteName()  )  )
@section('breadcrumb')
  <div class="row">
    <div class="col-md-12">
      <h1>{{ trans('clients.breadcrumb.index') }}</h1>
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="fa fa-home"></i> {{ trans('common.home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">{{ trans('clients.breadcrumb.name') }}</a></li>
        <li class="breadcrumb-item" class="active">{{ trans('clients.breadcrumb.edit') }}</li>
      </ul>
    </div>
  </div>
@endsection


@section('content')

<div class="row">
	<div class="col-sm-12 col-md-6">
		<div class="card">
			<div class="card-header">
				<h4>{{ trans('clients.title.edit') }}</h4>
			</div>
			<div class="card-body">

        <form method="post" action="{{ route('clients.update', $client->uuid ) }}">
					{{ method_field('PATCH') }}
          @csrf

					<div class="form-row">
            <div class="col-sm-12 mb-4 md-form md-outline">
              <label for="name">{{ trans('clients.full_name') }}</label>
              <input name="name" type="text"
							value="@if ( old('name')){{ old('name') }}@else{{ $client->name }}@endif"
							class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" required>
              @if ($errors->has('name'))
                  <div class="invalid-feedback">
                  {{ $errors->first('name') }}
                 </div>
              @endif
            </div>

          </div>

          <div class="form-row">
            <div class="col-sm-12 mb-4 md-form md-outline">
              <label for="phone">{{ trans('clients.phone') }}</label>
              <input name="phone" type="text"
							value="@if ( old('phone')){{ old('phone') }}@else{{ $client->phone }}@endif"
							 class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" id="phone" required>
              @if ($errors->has('phone'))
                  <div class="invalid-feedback">
                  {{ $errors->first('phone') }}
                 </div>
              @endif
            </div>

          </div>

          <div class="form-row">
            <div class="col-sm-12 mb-4 md-form md-outline">
              <label for="email">{{ trans('clients.email') }}</label>
              <input name="email" type="text"
							value="@if ( old('email')){{ old('email') }}@else{{ $client->email }}@endif"
							 class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="phone" required>
              @if ($errors->has('email'))
                  <div class="invalid-feedback">
                  {{ $errors->first('email') }}
                 </div>
              @endif
            </div>
          </div>


          <div class="form-row">

            <div class="col-sm-12 mb-4 md-form md-outline">
              <select name="gender" id="gender" class="form-control">
                <option value="female" @if( $client->is_active == 'female' ) selected @endif  >{{ trans('clients.gender.male') }}</option>
                <option value="male" @if( $client->is_active == 'male' ) selected @endif >{{ trans('clients.gender.female') }}</option>
              </select>
              @if ($errors->has('gender'))
                  <div class="invalid-feedback">
                  {{ $errors->first('gender') }}
                 </div>
              @endif
            </div>
          </div>



          <div class="form-row">
            <div class="col-sm-12 mb-4 md-form">
              <select name="is_active" id="is_active" class="form-control">
              <option value="1" @if( $client->is_active == 1 ) selected @endif >{{ trans('clients.active') }}</option>
              <option value="0" @if( $client->is_active == 0 ) selected @endif >{{ trans('clients.deactive') }}</option>
              </select>
              @if ($errors->has('is_active'))
                  <div class="invalid-feedback">
                  {{ $errors->first('is_active') }}
                 </div>
              @endif
            </div>
          </div>


          <div class="form-row">
            <div class="col-sm-12 mb-4 md-form md-outline">
              <label for="address">{{ trans('clients.address') }}</label>
              <textarea name="address" class="md-textarea form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" id="address" rows="3">@if ( old('address')){{ old('address') }}@else{{ $client->address }}@endif</textarea>
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
