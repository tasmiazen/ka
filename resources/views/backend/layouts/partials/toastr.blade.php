

@if ($errors->any())

<script>




  var toaster = $('#toaster')
  @foreach ($errors->all() as $error)
  function callToaster() {
    toastr.options = {
      "closeButton": true,
      "debug": true,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": true,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": 0,
      "extendedTimeOut": 0,
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut",
      "tapToDismiss": false
    };
    toastr.error("{{ $error }}", "Error!");
  }

  if(toaster.length != 0){

    if (document.dir != "rtl") {
      callToaster("toast-top-right");
    } else {
      callToaster("toast-top-left");
    }
  }
  @endforeach
</script>
@endif

{{-- ['alert' => ['type' => 'warning', 'msg' =>  '', 'strong' => '', 'dismissible' => true ] ] --}}


@if ($message = Session::get('success'))

<script>
function callToaster() {
  toastr.options = {
    "closeButton": true,
    "debug": true,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": 0,
    "extendedTimeOut": 0,
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut",
    "tapToDismiss": false
  };
  toastr.success("{{ $message }}", "Success!");
}

if(toaster.length != 0){

  if (document.dir != "rtl") {
    callToaster("toast-top-right");
  } else {
    callToaster("toast-top-left");
  }
}
</script>
@endif


@if ($message = Session::get('error'))

<script>
function callToaster() {
  toastr.options = {
    "closeButton": true,
    "debug": true,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": 0,
    "extendedTimeOut": 0,
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut",
    "tapToDismiss": false
  };
  toastr.error("{{ $message }}", "Error!");
}

if(toaster.length != 0){

  if (document.dir != "rtl") {
    callToaster("toast-top-right");
  } else {
    callToaster("toast-top-left");
  }
}
</script>

@endif


@if ($message = Session::get('warning'))
<script>
function callToaster() {
  toastr.options = {
    "closeButton": true,
    "debug": true,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": 0,
    "extendedTimeOut": 0,
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut",
    "tapToDismiss": false
  };
  toastr.warning("{{ $message }}", "Warning!");
}

if(toaster.length != 0){

  if (document.dir != "rtl") {
    callToaster("toast-top-right");
  } else {
    callToaster("toast-top-left");
  }
}
</script>
@endif


@if ($message = Session::get('info'))
<script>
function callToaster() {
  toastr.options = {
    "closeButton": true,
    "debug": true,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": 0,
    "extendedTimeOut": 0,
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut",
    "tapToDismiss": false
  };
  toastr.info("{{ $message }}", "Info!");
}

if(toaster.length != 0){

  if (document.dir != "rtl") {
    callToaster("toast-top-right");
  } else {
    callToaster("toast-top-left");
  }
}
</script>
@endif

@if ($message = Session::get('status') )
<script>
function callToaster() {
  toastr.options = {
    "closeButton": true,
    "debug": true,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": 0,
    "extendedTimeOut": 0,
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut",
    "tapToDismiss": false
  };
  toastr.info("{{ $message }}", "Info!");
}

if(toaster.length != 0){

  if (document.dir != "rtl") {
    callToaster("toast-top-right");
  } else {
    callToaster("toast-top-left");
  }
}
</script>
@endif
