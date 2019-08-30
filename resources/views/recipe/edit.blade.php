@extends('backend.layouts.app')

@section('title', trans(  Route::currentRouteName()  )  )
@section('breadcrumb')
  <div class="row">
    <div class="col-md-12">
      <h1>{{ trans('users.breadcrumb.index') }}</h1>
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="fa fa-home"></i> {{ trans('common.home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">{{ trans('users.breadcrumb.name') }}</a></li>
        <li class="breadcrumb-item" class="active">{{ trans('users.breadcrumb.edit') }}</li>
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
        <h4>{{ trans('users.edit_title') }}</h4>
      </div>

      <div class="card-body">
        <form action="{{ route('users.update', $user->uuid ) }}" method="post">
          @method('PATCH')
          @csrf

        <!-- Text -->
          <div class="card-text">

          <div class="form-group"> 
            <select name="role_id" class="browser-default custom-select" >
            <option selected value="">{{ trans('users.departments') }}</option>
              @foreach( $roles as $role )
              <option value="{{ $role->id }}" @if( $user->role_id == $role->id  ) selected @endif>{{ $role->name }}</option>
              @endforeach
            </select>
          </div>

            <!-- First Name input -->
            <div class="form-group">
              <label for="fname">{{ trans('users.fname') }}</label>
              <input name="fname" value="{{ $user->fname }}" type="text" id="fname" class="form-control">
            </div>

            <!-- Last Name input -->
            <div class="form-group">
              <label for="lname">{{ trans('users.lname') }}</label>
              <input name="lname" value="{{ $user->lname }}" type="text" id="lname" class="form-control">
            </div>

            <!-- Password input -->
            <div class="form-group">
              <label for="password">{{ trans('users.password') }}</label>
              <input name="password"  type="password" id="password" class="form-control">
            </div>

            <div class="form-group">
            <select name="gender" class="browser-default custom-select" >
              <option value="male" @if($user->gender == 'male' ) selected @endif >{{ trans('users.gender.male') }}</option>
              <option value="female" @if($user->gender == 'female' ) selected @endif >{{ trans('users.gender.female') }}</option>
            </select>
            </div>

            <!--Address textarea-->
            <div class="form-group">
              <label for="address">{{ trans('users.address') }}</label>
              <textarea name="address" id="address" class="md-textarea form-control" rows="3">{{ $user->address }}</textarea>
            </div>


            <div class="form-group">
            <select name="is_active" class="browser-default custom-select mb-2" >
              <option value="0" @if($user->is_active == 0 ) selected @endif >{{ trans('users.deactive') }}</option>
              <option value="1" @if($user->is_active == 1 ) selected @endif >{{ trans('users.active') }}</option>
            </select>
            </div>
    
            <button type="submit" class="btn btn-primary btn-sm btn-rounded">{{ trans('users.save') }}</button>
            <a href="{{ route('users.index') }}" class="btn btn-danger">{{ trans('users.cancel') }}</a>

          </div>
        </form>
      </div>
    </div>
</div>

</div>
<!-- Card -->

@endsection
