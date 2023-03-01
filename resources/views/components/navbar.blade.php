<div class="page-header">
    <nav class="navbar navbar-expand-lg d-flex justify-content-between">
        <div class="" id="navbarNav">
            <ul class="navbar-nav" id="leftNav">
                <li class="nav-item">
                    <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
            </ul>
        </div>
        <div class="logo">
            <a class="navbar-brand" href="{{ url('/') }}"></a>
        </div>
        <div class="" id="headerNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link search-dropdown" href="#" id="searchDropDown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="search"></i></a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-lg search-drop-menu"
                        aria-labelledby="searchDropDown">
                        <form>
                            <input class="form-control" type="text" placeholder="Type something.."
                                aria-label="Search">
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><img
                            src="../../assets/images/avatars/profile-image.png" alt=""></a>
                    <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                        @guest
                            <a class="dropdown-item" href="{{ route('login') }}"><i
                                    data-feather="inbox"></i>{{ __('Masuk') }}</a>
                        @else
                            <a class="dropdown-item" href="{{ route('home') }}"><i data-feather="user"></i>Profile</a>
                            <a class="dropdown-item" href="#"><i data-feather="inbox"></i>Product</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i data-feather="settings"></i>Settings</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    data-feather="log-out"></i>{{ __('Keluar') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="page-sidebar">
    <ul class="list-unstyled accordion-menu">

        @guest
            <li class="sidebar-title">
                Main
            </li>
            <li class="active-page">
                <a href="{{ route('login') }}"><i data-feather="home"></i>{{ __('Masuk') }}</a>
            </li>
            <li>
                <a href="{{ url('/') }}"><i data-feather="calendar"></i>Produk</a>
            </li>
        @else
            <li class="sidebar-title">
                Main
            </li>
            <li class="active-page">
                <a href="index.html"><i data-feather="home"></i>Dashboard</a>
            </li>
            <li class="sidebar-title">
                Apps
            </li>
            <li>
                <a href="email.html"><i data-feather="inbox"></i>Beranda</a>
            </li>
            <li>
                <a href="{{ route('product.index') }}"><i data-feather="calendar"></i>Manajemen Produk</a>
            </li>
            <li>
                <a href="{{ url('/') }}"><i data-feather="calendar"></i>Produk</a>
            </li>
            <li>
                <a href="{{ route('logout') }}"><i data-feather="calendar" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></i>{{ __('Keluar') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        @endguest
    </ul>
</div>
