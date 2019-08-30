@if (
  Session::get('success') ||
  Session::get('error') ||
  Session::get('info') ||
  Session::get('danger') ||
  Session::get('warning') ||
  $errors->any()
  )
      <div class="modal fade right" id="notificationModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-side modal-top-right modal-notify
            @if ( Session::get('success'))
                modal-success
              @elseif( Session::get('error') )
                modal-error
              @elseif( Session::get('info') )
                modal-info
              @elseif( Session::get('danger') )
                modal-danger
              @elseif( Session::get('warning') )
                modal-warning
              @else
                modal-danger
            @endif" role="document">
          <!--Content-->
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
              <p class="heading lead">
                @if ( Session::get('success'))
                  Success
                  @elseif( Session::get('error') )
                    Error
                  @elseif( Session::get('info') )
                    Info
                  @elseif( Session::get('danger') )
                    Danger
                  @elseif( Session::get('warning') )
                    Warning
                  @else
                  Error
                @endif
              </p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
              </button>
            </div>
            <!--Body-->
            <div class="modal-body">
              <div class="text-center">
                <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                <p>
                  @if ( Session::get('success'))
                    {{ Session::get('success') }}
                    @elseif( Session::get('error') )
                      {{ Session::get('error') }}
                    @elseif( Session::get('info') )
                      {{ Session::get('info') }}
                    @elseif( Session::get('danger') )
                      {{ Session::get('danger') }}
                    @elseif( Session::get('warning') )
                      {{ Session::get('warning') }}
                    @else
                      {{ $errors->first() }}
                   @endif
                </p>
              </div>
            </div>

          </div>
          <!--/.Content-->
        </div>
      </div>
      <script>
        $(document).ready(function () {
          $('#notificationModel').modal('show');
        });
      </script>
@endif
