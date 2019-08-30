<header class="header">
    <div class="header-block header-block-collapse d-lg-none d-xl-none">
        <button class="collapse-btn" id="sidebar-collapse-btn">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="header-block header-block-search">
        <form role="search">
            <div class="input-container">
                <i class="fa fa-search"></i>
                <input type="search" placeholder="Search">
                <div class="underline"></div>
            </div>
        </form>
    </div>
    <div class="header-block header-block-nav">
        <ul class="nav-profile">
    
            <li class="profile dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="img" style="background-image: url('{{ URL::asset( 'assets/img/user/user.png') }}')"> </div>
                    <span class="name"> 
                    
                    User

                    </span>
                </a>
                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                    
                    <a class="dropdown-item" href="{{ route('backend.logout') }}"  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off icon"></i> {{ trans('users.logout') }}  </a>

                        <form id="logout-form" action="{{ route('backend.logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>
                </div>
            </li>
        </ul>
    </div>
</header>