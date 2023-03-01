<div class="vlt-site-holder animsition vlt-footer-fixed">
    <div class="vlt-content-holder">
        <header class="vlt-header-holder vlt-header-fixed" data-header-fixed="1">
            <div class="container">
                <div class="vlt-header-inner">
                    <div class="vlt-header-left">
                        <a href="{{ url('/') }}" class="vlt-site-logo">
                            <img src="assets/img/logo.png" alt="Vinero" style="max-height: 13px">
                        </a>
                    </div>
                    <div class="vlt-header-right">
                        <div class="vlt-menu-toggle vlt-fullscreen-menu-toggle" data-before-text="Menu">
                            <span class="line line-one"><span class="inner"></span></span>
                            <span class="line line-two"><span class="inner"></span></span>
                            <span class="line line-three"><span class="inner"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /.vlt-header-holder vlt-header-fixed -->
        <div class="vlt-navigation-fullscreen-holder">
            <div class="vlt-navigation-fullscreen">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('product.index') }}">Product</a></li>
                    <li><a href="{{ route('product.create') }}">Tambah Product</a></li>
                    <li>
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"><i
                                class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i>Keluar
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
