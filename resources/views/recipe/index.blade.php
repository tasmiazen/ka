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
                    <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header">
                                <div class="item-row">
                      
                                    <div class="item-col item-col-header">
                                        <div>
                                            <span>Name</span>
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

                         @foreach($recipes as $key => $value )

                         {{ $value->recipe_id  }}

                         <li class="item">
                                <div class="item-row">

  
                                    <div class="item-col fixed  md">
                                        <p>
                                            <div class="">{{ $value->name }}</div>
                                        </p>
                                    </div>

                                    <div class="item-col item-col-date">
                                        <p>
                                            <div class=""></div>
                                        </p>
                                    </div>

            

                                    <div class="item-col item-col-date">
                                        <div class="item-heading">Published</div>
                                        <div class="no-overflow">{{ $value->created_at }} </div>
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

                            @php
                                $oldId =  $value->recipe_id;
                            @endphp
                         @endforeach
                       
                        </ul>
                    </div>
                    <nav class="text-right">

                    </nav>



                           

@endsection
