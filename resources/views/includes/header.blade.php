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
                        <li class="nav-item"><a class="nav-link {{ !empty($nav) && $nav == 'home'?'active':'' }}" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link {{ !empty($nav) && $nav == 'services'?'active':'' }}" href="{{ route('services') }}">Services</a></li>
                        <li class="nav-item"><a class="nav-link {{ !empty($nav) && $nav == 'portfolios'?'active':'' }}" href="{{ route('portfolios') }}">Portfolio</a></li>
{{--                        <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>--}}
                        <li class="nav-item"><a class="nav-link {{ !empty($nav) && $nav == 'contact'?'active':'' }}" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                    <div class="header-nav-right">
                        <div class="header-btn">
                            <a href="tel:+2349060698110" class="theme-btn mt-2">Hire Me <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
