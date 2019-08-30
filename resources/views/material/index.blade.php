@extends('backend.layouts.app')


@section('title', trans(  Route::currentRouteName()  )  )

@section('breadcrumb')
  <div class="row">
      <div class="col-md-12">
      <h1>Materials</h1>

          <!--breadcrumbs start -->
          <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('rawMeterials.index') }}">Materials</a></li>
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
                                    <h3 class="title">  <a href="{{ route('rawMeterials.create') }}" class="btn btn-primary btn-sm rounded-s"> New </a>

                                </div>
                            </div>
                        </div>
           
                    </div>
                    <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header">
                                <div class="item-row">
                           
                                    <div class="item-col item-col-header ">
                                            Name
                                    </div>
                            
                  
                                    <div class="item-col item-col-header">
                                        <div>
                                            <span>Unit</span>
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
                         @foreach($materials as $key => $value )

                         <li class="item">
                                <div class="item-row">
                             
                                    <div class="item-col ">
                                        <p>
                                            <div class="">{{ $value->name }}</div>
                                        </p>
                                    </div>

                                    <div class="item-col">
                                        <div class="item-heading">Unit</div>
                                        <div>
                                            <div class="no-overflow">{{ $value->unit }}</div>
                                        </div>
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
                                                     

                                                        <a class="remove" id="{{ $value->id }}" href="{{ route('rawMeterials.destroy', $value->id ) }}" onclick="modalConfirmDelete(this.id, this.href);return false;"><i class="fa fa-trash-o "></i></a>


                                                    </li>
                                                    <li>
                                                        <a class="edit" href="{{ route('rawMeterials.edit', $value->id) }}">
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
                    <nav class="text-right">
                        
                    {{ $materials->links() }}

                    </nav>

@endsection
