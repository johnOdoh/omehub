<nav class="navbar navbar-expand navbar-light navbar-bg">
	<a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <form class="d-none d-sm-inline-block">
        <div class="input-group input-group-navbar">
            <input type="text" class="form-control" placeholder="Search…" aria-label="Search">
            <button class="btn" type="button">
                <i class="align-middle" data-feather="search"></i>
            </button>
        </div>
    </form>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon pe-md-0 dropdown-toggle" href="#" data-bs-toggle="dropdown">
                    {{-- <img src="{{ asset('assets/img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded" alt="{{ auth()->user()->name }}" /> --}}
                    <div class="text-center">
                        <span class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto" style="width: 35px; height: 35px; font-size: .5em;">{{ auth()->user()->initials() }}</span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    {{-- <a class='dropdown-item' href="">
                        <i class="align-middle me-1" data-feather="user"></i> Profile
                    </a>
                    <div class="dropdown-divider"></div> --}}
                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                    <form method="POST" id="logout-form" action="{{ route('logout') }}" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
