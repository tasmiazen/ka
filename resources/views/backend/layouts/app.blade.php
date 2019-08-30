<!doctype html>
<html class="no-js" lang="en">
  @include('backend.layouts.partials.head')
<body>

  <div class="main-wrapper">
      <div class="app" id="app">



        @include('backend.layouts.partials.sidebar')
        @include('backend.layouts.partials.header')

        
        <div class="sidebar-overlay" id="sidebar-overlay"></div>
        <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
        <div class="mobile-menu-handle"></div>


   
        <article class="content items-list-page">
        @include('flash-message')

            @yield('breadcrumb')
            @include('backend.layouts.partials.modalConfirmDelete')

            @yield('content')

        </article>

        @include('backend.layouts.partials.footer')

      </div>
  </div>
  @include('backend.layouts.partials.scripts')
</body>
</html>


