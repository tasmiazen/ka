@extends('backend.layouts.app')


@section('title', trans(  Route::currentRouteName()  )  )

@section('breadcrumb')
<div class="row">
  <div class="col-md-12">
    <h1>{{ trans('users.breadcrumb.index') }}</h1>

    <!--breadcrumbs start -->
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="fa fa-home"></i> Home</a></li>
      <li class="breadcrumb-item"><a href="{{ route('users.index') }}">{{ trans('users.breadcrumb.name') }}</a></li>
      <li class="breadcrumb-item" class="active">{{ trans('users.breadcrumb.list') }}</li>
    </ul>
    <!--breadcrumbs end -->
  </div>
</div>
@endsection


@section('content')

<div class="title-search-block">
  <div class="title-block">
    <div class="row">
      <div class="col-md-6">
        <h3 class="title"> <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm rounded-s">New</a>
        </h3>

      </div>
    </div>
  </div>

</div>
<div class="card items">
  <ul class="item-list striped">
    <li class="item item-list-header">
      <div class="item-row">

        <div class="item-col item-col-header fixed item-col-img md">
          <div>
            <span>Media</span>
          </div>
        </div>
        <div class="item-col item-col-header item-col-title">
          <div>
            <span>Name</span>
          </div>
        </div>

        <div class="item-col item-col-header item-col-author">
          <div class="no-overflow">
            <span>Author</span>
          </div>
        </div>
        <div class="item-col item-col-header item-col-date">
          <div>
            <span>Published</span>
          </div>
        </div>
        <div class="item-col item-col-header fixed item-col-actions-dropdown">
        </div>
      </div>
    </li>

    @foreach( $data as $key => $value )
    <li class="item">
      <div class="item-row">

        <div class="item-col fixed item-col-img md">
          <a href="item-editor.html"> ;
            <div class="item-img rounded" 
            style="background-image: url('http://www.gravatar.com/avatar/' + {{ md5($value->email) }} + '.jpg?s=80')"></div>
          </a>
        </div>
        <div class="item-col fixed pull-left item-col-title">
          <div class="item-heading">Name</div>
          <div>
            <a href="item-editor.html" class="">
              <h4 class="item-title"> {{ $value->email }} </h4>
            </a>
          </div>
        </div>

        <div class="item-col item-col-stats no-overflow">
          <div class="item-heading">Stats</div>
          <div class="no-overflow">
            <div class="item-stats sparkline" data-type="bar"><canvas style="display: inline-block; width: 84px; height: 4px; vertical-align: top;" width="84" height="4"></canvas></div>
          </div>
        </div>

        <div class="item-col item-col-author">
          <div class="item-heading">Author</div>
          <div class="no-overflow">
            <a href="">{{ $value->name }}</a>
          </div>
        </div>
        <div class="item-col item-col-date">
          <div class="item-heading">Published</div>
          <div class="no-overflow"> 21 SEP 10:45 </div>
        </div>
        <div class="item-col fixed item-col-actions-dropdown">
          <div class="item-actions-dropdown">
            <a class="item-actions-toggle-btn">
              <span class="inactive">
                <i class="fa fa-cog"></i>
              </span>
              <span class="active">
                <i class="fa fa-chevron-circle-right"></i>
              </span>
            </a>
            <div class="item-actions-block">
              <ul class="item-actions-list">
                <li>
                  <a class="remove" id="{{ $value->id }}" href="{{ route('recipes.destroy', $value->id ) }}" onclick="modalConfirmDelete(this.id, this.href);return false;"><i class="fa fa-trash-o "></i>
                  </a>
                </li>
                <li>
                  <a class="edit" href="{{ route('recipes.edit', $value->id) }}">
                    <i class="fa fa-pencil"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </li>
    @endforeach
  </ul>
</div>               
@endsection
