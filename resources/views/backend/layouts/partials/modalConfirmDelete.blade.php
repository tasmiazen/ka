<script>
function modalConfirmDelete( id , uri ) {

    $('#modalConfirmDelete').modal('show');
    $('#modalConfirmDelete button.ok').off().on('click', function() {
       // close window
       $('#modalConfirmDelete').modal('hide');
       // and callback
       $('#modalConfirmDelete form').attr('action',  uri  );
       $("#modalConfirmDelete form").append('<input name="id" value="'+ id +'" />');
       $("#modalConfirmDelete form").submit();

       return true;
    });

    $('#modalConfirmDelete button.cancel').off().on('click', function() {
       // close window
       $('#modalConfirmDelete').modal('hide');
       // callback
       return false;
    });
}
</script>



  <!-- /.modal -->
  <div class="modal fade" id="modalConfirmDelete">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">
                      <i class="fa fa-warning"></i> {{ trans('common.modal.delete.heading') }}</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <p>Are you sure want to do this?</p>
                  <form action="" method="post" style="display: none;">
                    {{ method_field('DELETE') }}
                      @csrf
                  </form>
              </div>
              <div class="modal-footer">
                  <button href="" class="btn btn-primary ok" data-dismiss="modal">{{ trans('common.yes') }}</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('common.no') }}</button>
              </div>
          </div>
          <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->