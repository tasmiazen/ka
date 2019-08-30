@extends('backend.layouts.app')

@section('title', trans(  Route::currentRouteName()  )  )

@section('breadcrumb')
  <div class="row">
      <div class="col-md-12">
      <h1>{{ trans('pages.breadcrumb.index') }}</h1>
          <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="fa fa-home"></i> {{ trans('common.home') }}</a></li>
              <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">{{ trans('pages.breadcrumb.name') }}</a></li>
              <li class="breadcrumb-item" class="active">{{ trans('pages.breadcrumb.create') }}</li>
          </ul>
      </div>
  </div>
@endsection





@section('assetsHeader')
  <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
@endsection

@section('content')
<div class="row">
	<div class="col-xl-12">
		<div class="card">

      <div class="card-header">
        <h4 class="text-dark font-weight-medium"><a>{{ trans('pages.title.create') }}</a></h4>
      </div>

			<div class="card-body">
            <form class="" action="{{ route('pages.store') }}" method="post">
                @csrf

                <!-- Default input -->
              <div class="form-group">
                <label for="title">{{ trans('pages.page_title') }}</label>
                <input name="title" type="text" class="form-control" id="title">
              </div>


              <div class="form-group">
                <label for="slug">{{ trans('pages.slug') }}</label>
                <input name="slug" type="text" class="form-control" id="slug">
              </div>


                <div class="form-group">
                  <label for="meta_description">{{ trans('pages.meta_description') }}</label>
                  <textarea  name="meta_description" class="form-control" id="meta_description" rows="4"></textarea>
                </div>


                <!--Material textarea-->
                <div class="form-group">
                  <div for="description">{{ trans('pages.description') }}</div>
                  <textarea name="description" id="Knowledge"></textarea>
                </div>


                <div class="form-group">
                <label for="is_active">Status</label>
                  <select name="is_active" id="is_active" class="browser-default custom-select">
                    <option value="1" selected>{{ trans('pages.active') }}</option>
                    <option value="0">{{ trans('pages.deactive') }}</option>
                  </select>
                </div>

                <!-- Indicates a successful or positive action -->
                <button type="submit" class="btn btn-success">{{ trans('pages.save') }}</button>
                <!-- Indicates a dangerous or potentially negative action -->

                <a href="{{ route('pages.index') }}" class="btn btn-danger">{{ trans('page.cencel') }}</a>


            </form>


			</div>
		</div>
	</div>
</div>



  <script>

  tinymce.init({
    selector: 'textarea#Knowledge',
    height: 300,
    menubar: false,
    plugins: [
      'advlist autolink lists link image charmap print preview anchor textcolor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste code help wordcount'
    ],
    toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
    content_css: [
      '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
      '//www.tiny.cloud/css/codepen.min.css'
    ]
  });
  </script>

@endsection
