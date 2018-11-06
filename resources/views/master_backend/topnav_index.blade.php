<nav class="navbar top-navbar navbar-expand-md navbar-dark">
    @include('master_backend.topnav_logo')
    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

        <ul class="navbar-nav float-left mr-auto">
            <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>

        </ul>
        <ul class="navbar-nav float-right">
            @include('master_backend.topnav_notifikasi')
            @include('master_backend.topnav_message')

            @include('master_backend.topnav_user')

        </ul>
    </div>
</nav>
