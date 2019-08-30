
<aside class="sidebar">
    <div class="sidebar-container">

        <div class="sidebar-header" style="max-height: 70px; overflow: hidden;">
        
        <div class="brand" style="padding: 0;">
            <a href="{{ route('admin') }}" style="display: table-cell;margin: 0 auto;">
                <img src="{{ config('settings.logo') }}" alt="{{ config('settings.side_name') }}" style="max-height: 56px;margin-left: 1rem;">
            </a>
        </div>
        <br/>
                
        </div>
        <nav class="menu">
            <ul class="sidebar-menu metismenu" id="sidebar-menu">

                <li>
                    <a href="{{ route('admin') }}">
                        <i class="fa fa-tachometer" aria-hidden="true"></i> {{ trans('dashboards.index') }}
                    </a>
                </li>

                @if( Auth::guard('admin')->id() )

                <li>
                    <a href="#">
                        <i class="fa fa-users"></i> {{ trans('users.index') }}
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="{{ route('users.index') }}">{{ trans('users.list') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('users.create') }}">{{ trans('users.create') }}</a>
                        </li>
        
                    </ul>
                </li>

                <li>
                    <a href="#">
                    <i class="fa fa-user-secret" aria-hidden="true"></i> {{ trans('clients.index') }}
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="{{ route('clients.index') }}">{{ trans('clients.list') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('clients.create') }}">{{ trans('clients.create') }}</a>
                        </li>
                    </ul>
                </li>

                @endif


                @if( Auth::guard('client')->id() )

                <li>
                    <a href="#">
                    <i class="fa fa-user-secret" aria-hidden="true"></i> Stocks
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="{{ route('stocks.index') }}">All Stock</a>
                        </li>
                        <li>
                            <a href="{{ route('stocks.create') }}">Craete</a>
                        </li>
                    </ul>
                </li> 
               <li>
                    <a href="#">
                    <i class="fa fa-user-secret" aria-hidden="true"></i> Materials
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="{{ route('rawMeterials.index') }}">All material</a>
                        </li>
                        <li>
                            <a href="{{ route('rawMeterials.create') }}">Material Craete</a>
                        </li>
                    </ul>
                </li>
      
    
                <li>
                    <a href="#">
                    <i class="fa fa-user-secret" aria-hidden="true"></i> menus
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="{{ route('menus.index') }}">All </a>
                        </li>
                        <li>
                            <a href="{{ route('menus.create') }}"> Craete</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="#">
                    <i class="fa fa-user-secret" aria-hidden="true"></i> Recipes
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="{{ route('recipes.index') }}">All </a>
                        </li>
                        <li>
                            <a href="{{ route('recipes.create') }}"> create</a>
                        </li>
                    </ul>
                </li>
 

                <li>
                    <a href="#">
                    <i class="fa fa-user-secret" aria-hidden="true"></i> Reports
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="{{ url('reports/cost') }}">Sost</a>
                        </li>
                        <li>
                            <a href="{{ url('reports/stock') }}">Stock</a>
                        </li>
                    </ul>
                </li>

                @endif
              

            </ul>
        </nav>
    </div>
</aside>
