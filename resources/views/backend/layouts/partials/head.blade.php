
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="{{ Config::get('settings.favicon') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ Config::get('settings.site_name') }} - @yield('title')</title>
  <link rel="stylesheet" href="{{ URL::asset( '_backend/css/vendor.css') }}">
  <link rel="stylesheet" id="theme-style" href="{{ URL::asset( '_backend/css/app.css') }}">
  <link  href="{{ URL::asset( 'assets/plugins/toastr/toastr.min.css') }}" rel="stylesheet" />
  <script type="text/javascript"  src="{{ URL::asset( 'assets/plugins/toastr/toastr.min.js') }}"></script>
  @include('backend.layouts.partials.toastr')
  
  @yield('assetsHeader')
</head>

