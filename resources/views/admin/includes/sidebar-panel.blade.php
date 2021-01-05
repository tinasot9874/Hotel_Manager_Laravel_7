<div class="off-canvas-overlay" data-toggle="sidebar"></div>
<div class="sidebar-panel">
    <div class="brand">
        <!-- toggle offscreen menu -->
        <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen hidden-lg-up">
            <i class="material-icons">menu</i>
        </a>
        <!-- /toggle offscreen menu -->
        <!-- logo -->
        <a class="brand-logo">
            <img class="expanding-hidden" src="{{asset('images/logo.png')}}" alt=""/>
        </a>
        <!-- /logo -->
    </div>
    <div class="nav-profile dropdown">
        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <div class="user-image">
                <img src="{{asset('images/avatar.jpg')}}" class="avatar img-circle" alt="user" title="user"/>
            </div>
            <div class="user-info expanding-hidden">
                Betty Simmons
                <small class="bold">Administrator</small>
            </div>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="javascript:;">Settings</a>
            <a class="dropdown-item" href="javascript:;">Upgrade</a>
            <a class="dropdown-item" href="javascript:;">
                <span>Notifications</span>
                <span class="tag bg-primary">34</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:;">Help</a>
            <a class="dropdown-item" href="admin/logout"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="admin/logout" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
    <!-- main navigation -->
    <nav>
        <p class="nav-title">NAVIGATION</p>
        <ul class="nav">
            <!-- dashboard -->
            <li>
                <a href="/">
                    <i class="material-icons text-primary" aria-hidden="true">
                        hotel
                    </i>
                    <span>QL Phòng</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.roomtype.index')}}">
                    <i class="material-icons text-primary" aria-hidden="true">
                        home
                    </i>
                    <span>QL Loại Phòng</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons text-bluegrey" aria-hidden="true">
                        people
                    </i>
                    <span>QL Khách Hàng </span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.service.index')}}">
                    <i class="material-icons text-amber" aria-hidden="true">
                        room_service
                    </i>
                    <span>QL Dịch Vụ </span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.facility.index')}}">
                    <i class="material-icons text-lightgreen" aria-hidden="true">
                        tv
                    </i>
                    <span>QL Cơ sở vật chất </span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.coupon.index')}}">
                    <i class="material-icons text-cyan" aria-hidden="true">
                        confirmation_number
                    </i>
                    <span>QL Coupon </span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.status.index')}}">
                    <i class="material-icons text-success" aria-hidden="true">
                        check_circle
                    </i>
                    <span>QL Trạng thái </span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /main navigation -->
</div>
