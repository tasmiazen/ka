@extends('backend.layouts.app')


@section('title', trans(  Route::currentRouteName()  )  )

@section('breadcrumb')
  <div class="row">
      <div class="col-md-12">
      <h1>{{ trans('pages.breadcrumb.index') }}</h1>

          <!--breadcrumbs start -->
          <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="fa fa-home"></i> {{ trans('common.home') }}</a></li>
              <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">{{ trans('pages.breadcrumb.name') }}</a></li>
              <li class="breadcrumb-item" class="active">{{ trans('pages.breadcrumb.edit') }}</li>
          </ul>
          <!--breadcrumbs end -->
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

      <div  class="card-header">
					<h4 class="text-dark font-weight-medium"><a>{{ trans('page.edit_title') }}</a></h4>
			</div>

			<div class="card-body">
            <form class="" action="{{ route('pages.update', $page->id ) }}" method="post">

                @method('PATCH')
                @csrf

              <div class="md-form md-outline">
                <label for="title">{{ trans('page.title') }}</label>
                <input name="title" type="text" value="{{ $page->title }}" class="form-control" id="title">
              </div>


              <div class="md-form md-outline">
                <label for="slug">{{ trans('page.slug') }}</label>
                <input name="slug" type="text" value="{{ $page->slug }}" class="form-control" id="slug">
              </div>


                <div class="md-form md-outline">
                  <label for="meta_description">{{ trans('page.metadescription') }}</label>
                  <textarea  name="meta_description" class="form-control" id="meta_description" rows="4">{{ $page->meta_description }}</textarea>
                </div>


                <!--Material textarea-->
                 <div for="description">{{ trans('page.description') }}</div>
                <div class="md-form">
                  <textarea name="description" id="Knowledge">{{ $page->description }}</textarea>
                </div>


                <div class="form-group">
                <label for="is_active">{{ trans('page.status') }}</label>
                  <select name="is_active" id="is_active" class="browser-default custom-select">
                    <option value="1" @if( $page->is_active == 1 ) selected @endif>{{ trans('page.active') }}</option>
                    <option value="0" @if( $page->is_active == 0 ) selected @endif>{{ trans('page.deactive') }}</option>
                  </select>
                </div>

                <!-- Indicates a successful or positive action -->
                <button type="submit" class="btn btn-success">{{ trans('page.save') }}</button>
                <!-- Indicates a dangerous or potentially negative action -->
                <button type="button" class="btn btn-danger">{{ trans('page.cencel') }}</button>


            </form>


			</div>
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
