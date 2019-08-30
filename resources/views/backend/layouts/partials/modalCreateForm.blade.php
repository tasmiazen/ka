<div class="modal fade" id="departmentModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-warning" role="document">
    <!--Content-->
    <form id="userRoleForm" method="post" action="{{ form_url }}" class="modal-content">
      @csrf
      <!--Header-->
      <div class="modal-header text-center">
        <h4 class="modal-title white-text w-100 font-weight-bold py-2">Create Department</h4>
        <a type="a" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </a>
      </div>

      <!--Body-->
      <div class="modal-body">

        @foreach($inputs as $input )
        <div class="md-form mb-5">
          <input name="{{ $input->name }}" type="{{ $input->type }}" id="{{ $input->name }}" class="form-control validate">
          <label data-error="wrong" data-success="right" for="{{ $input->name }}">{{ $input->label }}</label>
        </div>
        @endforeach

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <button type="submit" class="btn btn-outline-warning waves-effect">{{ trans('common.save') }}<i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </form>
    <!--/.Content-->
  </div>
</div>
