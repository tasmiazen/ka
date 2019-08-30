@extends('backend.layouts.app')


@section('title', trans(  Route::currentRouteName()  )  )

@section('breadcrumb')
  <div class="row">
      <div class="col-md-12">
      <h1>Stocks</h1>

          <!--breadcrumbs start -->
          <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('stocks.index') }}">Stock</a></li>
              <li class="breadcrumb-item" class="active">{{ trans('users.breadcrumb.list') }}</li>
          </ul>
          <!--breadcrumbs end -->
      </div>
  </div>
@endsection


@section('content')

{{ $data }}

<div class="title-search-block">
<div class="title-block">
    <div class="row">
        <div class="col-md-6">
            <h3 class="title">  
                <a href="{{ route('stocks.create') }}" class="btn btn-primary btn-sm rounded-s">New</a>


        </div>
    </div>
</div>

</div>
<div class="card items">
<ul class="item-list striped">
    <li class="item item-list-header">
        <div class="item-row">
            
            <div class="item-col pull-left item-col-header  md">
                <div>
                    <span>Name</span>
                </div>
            </div>

            <div class="item-col item-col-header item-col-quantity">
                <div>
                    <span>Quantity</span>
                </div>
            </div>

            <div class="item-col item-col-header item-col item-col-header item-col-date">
                <div>
                    <span>Total Price</span>
                </div>
            </div>



            <div class="item-col item-col-header fixed item-col-actions-dropdown">
            </div>
        </div>
    </li>
    @php
        $oldName = '';
        $oldPrice = 0;
        $counter = 1;
        $oldQuantity = 0;
    @endphp
     @foreach($data as $key => $value )

     <li class="item">
            <div class="item-row">
                
                @if($oldName == $value->meterial->name )
                    @php
                        $oldPrice = $oldPrice +  $value->price;
                        $oldQuantity = $oldQuantity + $value->quantity;
                        $counter++;
                    @endphp
                @else

                <div class="item-col ">
                    <div class="item-heading">
                        Name
                    </div>
                    <p class="overflow">{{ $value->meterial->name }}</p>
                </div>


                    @if( $counter != 1 )

                <div class="item-col">
                    <div class="item-heading">Quantity</div>
                    <div>
                        <h4> {{ $oldQuantity }}/{{ $value->unit }}</h4>
                    </div>
                </div>

                <div class="item-col fixed pull-left">
                    <div class="item-heading">Total Price</div>
                    <div>
                        <h4 class="item-title"> {{ $oldPrice * $oldQuantity }} USD</h4>
                    </div>
                </div>

                        @else



                        <div class="item-col">
                            <div class="item-heading">Quantity</div>
                            <div>
                                <h4> {{ $value->quantity }}</h4>
                            </div>
                        </div>

                        <div class="item-col fixed pull-left">
                            <div class="item-heading">Total Price</div>
                            <div>
                                <h4 class="item-title"> {{ $value->price * $value->quantity }} USD</h4>
                            </div>
                        </div>
                    @endif


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
                                    <a class="edit" href="{{ route('stocks.edit', $value->id) }}">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                    @php
                        $oldName = $value->meterial->name;
                    @endphp
                @endif



         
                
            
            </div>
        </li>

     @endforeach
                       
    </ul>
</div>
<nav class="text-right">
    
{{ $data->links() }}

</nav> 

@endsection
