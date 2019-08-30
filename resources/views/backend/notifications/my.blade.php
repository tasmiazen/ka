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
              <li class="breadcrumb-item" class="active">{{ trans('pages.breadcrumb.list') }}</li>
          </ul>
          <!--breadcrumbs end -->
      </div>
  </div>
@endsection




@section('content')

@include('backend.layouts.partials.modalConfirmDelete')

{!! $table !!}
@endsection
