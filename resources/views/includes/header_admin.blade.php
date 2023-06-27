<header class="header">
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="kelvin chibuikem Mgbemele" style="width: 250px;">
                </a>
                <div class="mobile-menu-right">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-btn-icon"><i class="far fa-bars"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link {{ !empty($nav) && $nav == 'home'?'active':'' }}" href="{{ route('home') }}" target="_blank">Home</a></li>
                        <li class="nav-item"><a class="nav-link {{ !empty($nav) && $nav == 'services'?'active':'' }}" href="{{ route('servicesMgt') }}">Services</a></li>
                        <li class="nav-item"><a class="nav-link {{ !empty($nav) && $nav == 'portfolios'?'active':'' }}" href="{{ route('portfoliosMgt') }}">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link {{ !empty($nav) && $nav == 'testimonies'?'active':'' }}" href="{{ route('testimonies') }}">Testimonies</a></li>
                        <li class="nav-item"><a class="nav-link {{ !empty($nav) && $nav == 'feedback'?'active':'' }}" href="{{ route('feedback') }}">Feedbacks</a></li>
                        <li class="nav-item"><a class="nav-link {{ !empty($nav) && $nav == 'changePassword'?'active':'' }}" href="{{ route('changePassword') }}">Change Password</a></li>
                    </ul>
                    <div class="header-nav-right">
                        <div class="header-btn">
                            <a href="{{ route('logout') }}" class="theme-btn mt-2">Logout <i class="far fa-sign-out"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
