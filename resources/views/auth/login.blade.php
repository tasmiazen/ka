
@extends('backend.layouts.default')

@section('title', trans('users.login') )

@section('defaultContent')


<div class="auth">
  <div class="auth-container">
    <div class="card">
      <header class="auth-header">
        <h1 class="auth-title">{{ Config::get('settings.site_name') }}</h1>
      </header>
      <div class="auth-content">
        <p class="text-center">CLINT LOGIN </p>

        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="row">

            <div class="form-group col-md-12 mb-4">
              <input name="email" value="{{ old('email') }}" type="email" class="form-control input-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" aria-describedby="emailHelp" placeholder="{{ __('E-Mail Address') }}">
              @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>


            <div class="form-group col-md-12 ">
              <input type="password" class="form-control input-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="{{ __('Password') }}">
              @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary">Login</button>
          </div>


        </form>



      </div>
    </div>
    <div class="text-center">
      <a href="{{ route('register') }}" class="btn btn-secondary btn-sm">
        <i class="fa fa-arrow-left"></i> Create Account </a>
      </div>
    </div>
  </div>
</div>
@endsection
