@extends('backend.layouts.app')


@section('title', trans(  Route::currentRouteName()  )  )

@section('breadcrumb')
  <div class="row">
      <div class="col-md-12">
      <h1>Recipes</h1>
          <!--breadcrumbs start -->
          <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('recipes.index') }}">Recipes</a></li>
              <li class="breadcrumb-item" class="active">List</li>
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
                <h3 class="title"> <a href="{{ route('recipes.create') }}" class="btn btn-primary btn-sm rounded-s">New</a>
                </h3>

            </div>
        </div>
    </div>
</div>


@endsection
