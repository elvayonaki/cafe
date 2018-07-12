<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{!! asset('images/icon/logo.png') !!}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                <a class="js-arrow" href="{{route('home')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href="chart.html">
                        <i class="fas fa-shopping-cart"></i>Pesanan Anda</a>
                </li>
                @if(Auth::user()->role->name == 'user')
                <li>
                <a href="{{route('store.create')}}">
                        <i class="fas fa-chart-bar"></i>Buat Toko</a>
                </li>
                @else
                <li>
                    <a href="chart.html">
                        <i class="fas fa-chart-bar"></i>Profile Toko</a>
                </li>
                <li>
                    <a href="chart.html">
                        <i class="fas fa-chart-bar"></i>Produk</a>
                </li>
                <li>
                    <a href="chart.html">
                        <i class="fas fa-chart-bar"></i>Reservasi Produk</a>
                </li>

                @endif
            </ul>
        </nav>
    </div>
</aside>
