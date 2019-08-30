@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissible" role="alert">
  {{ $message  }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


@if ($message = Session::get('secondary'))
<div class="alert alert-secondary alert-dismissible" role="alert">
  {{ $message  }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible" role="alert">
  {{ $message  }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


@if ($message = Session::get('danger'))
<div class="alert alert-danger alert-dismissible" role="alert">
  {{ $message  }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif



@if ($errors->any())
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	Please check the form below for errors
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-dismissible" role="alert">
  {{ $message  }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


@if ($message = Session::get('light'))
<div class="alert alert-light alert-dismissible" role="alert">
  {{ $message  }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


@if ($message = Session::get('dark'))
<div class="alert alert-primary alert-dismissible" role="alert">
  {{ $message  }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


