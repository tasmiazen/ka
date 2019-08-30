<li class="notifications new">
<a href="" data-toggle="dropdown">
    <i class="fa fa-bell-o"></i>
    <sup>
        <span class="counter">8</span>
    </sup>
</a>
<div class="dropdown-menu notifications-dropdown-menu">
    <ul class="notifications-container">


        @foreach( Auth::user()->notifications()->limit(7)->get() as $notification  ) 

            @dump( $notification )
        <li>
            <a href="" class="notification-item">
                <div class="img-col">
                    <div class="img" style="background-image: url('assets/faces/3.jpg')"></div>
                </div>
                <div class="body-col">
                    <p>
                        <span class="accent">Zack Alien</span> pushed new commit:
                        <span class="accent">Fix page load performance issue</span>. </p>
                </div>
            </a>
        </li>
        @endforeach
    

    </ul>
    <footer>
        <ul>
            <li>
                <a href="{{ route('backend.notifications.index') }}">{{ trans('common.view_all') }}</a>
            </li>
        </ul>
    </footer>
</div>
</li>