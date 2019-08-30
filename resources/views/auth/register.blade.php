@extends('backend.layouts.default')

@section('defaultContent')


<div class="auth">
  <div class="auth-container">
    <div class="card">
      <header class="auth-header">
        <h1 class="auth-title">{{  Config::get('settings.site_name')  }}
        </header>
        <div class="auth-content">
          <p class="text-center">CLIENT SIGNUP TO GET INSTANT ACCESS</p>
          
          
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
              <div class="form-group col-md-12 mb-4">
                <input name="name" value="{{ old('name') }}" type="text" class="form-control input-lg{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" aria-describedby="emailHelp" placeholder="{{ __('name') }}" required>
                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>


              <div class="form-group col-md-12 mb-4">
                <input name="email" value="{{ old('email') }}" type="email" class="form-control input-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" aria-describedby="emailHelp" placeholder="{{ __('E-Mail Address') }}" required>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>


              <div class="form-group col-md-12 ">
                <input type="password" class="form-control input-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="{{ __('Password') }}" required>
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group col-md-12">
                <input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" required placeholder="Confirmation">
              </div>


              
              <div class="col-md-12">

                <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">{{ __('Register') }}</button>
              </div>
            </div>
            

            @endsection
