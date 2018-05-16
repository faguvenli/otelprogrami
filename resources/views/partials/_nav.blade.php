<div class="container-scroller">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="/">Otel Altay</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav ml-auto">
                <li>
                    <a class="nav-link menuToggle" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas menuAcik" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                        <div class="profile-image">
                          @if(Auth::user()->avatar)
                            <img src="/uploads/avatars/{{ Auth::user()->avatar }}" alt="image">
                            @else
                            <img src="/images/default.jpg" alt="image">
                              @endif
                            <span class="online-status online"></span>
                        </div>
                        <div class="profile-name">
                            <p class="name">{{ Auth::check()?Auth::user()->name:'' }}</p>
                            <p class="designation"></p>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('customers')?'active':'' }}" href="/customers">
                        <span class="menu-title">Müşteriler</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('profile')?'active':'' }}" href="/profile">
                        <span class="menu-title">Profil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/auth/logout">
                        <span class="menu-title">Çıkış</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="main-panel">
