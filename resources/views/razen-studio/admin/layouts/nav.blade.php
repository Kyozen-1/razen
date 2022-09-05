<div id="nav" class="nav-container d-flex">
    <div class="nav-content d-flex">
        <!-- Logo Start -->
        <div class="logo position-relative">
            <a href="index.html">
            <!-- Logo can be added directly -->
            <!-- <img src="acorn/acorn-elearning-portal/img/logo/logo-white.svg" alt="logo" /> -->

            <!-- Or added via css to provide different ones for different color themes -->
            <div class="img"></div>
            </a>
        </div>
        <!-- Logo End -->

        <!-- User Menu Start -->
        <div class="user-container d-flex">
            <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="profile" alt="profile" src="{{ asset('acorn/acorn-elearning-portal/img/profile/profile-3.webp') }}" />
            <div class="name">Lisa Jackson</div>
            </a>
            <div class="dropdown-menu dropdown-menu-end user-menu wide">
            <div class="row mb-3 ms-0 me-0">
                <div class="col-12 ps-1 mb-2">
                    <div class="text-extra-small text-primary">ACCOUNT</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">User Info</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mb-1 ms-0 me-0">
                <div class="col-12 p-1 mb-3 pt-3">
                    <div class="separator-light"></div>
                </div>
                <div class="col-6 pe-1 ps-1">
                <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('razen-studio.logout') }}">
                                <i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
        <!-- User Menu End -->

        <!-- Menu Start -->
        <div class="menu-container flex-grow-1">
            <ul id="menu" class="menu">
                <li>
                    @if (request()->routeIs('razen-studio.admin.dashboard.index'))
                        <a href="{{ route('razen-studio.admin.dashboard.index') }}" class="active">
                    @else
                        <a href="{{ route('razen-studio.admin.dashboard.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Dashboard</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="#dashboards">
                    <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                    <span class="label">Dashboards</span>
                    </a>
                    <ul id="dashboards">
                    <li>
                        <a href="Dashboards.Elearning.html">
                        <span class="label">Elearning</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboards.School.html">
                        <span class="label">School</span>
                        </a>
                    </li>
                    </ul>
                </li> --}}
                <li>
                    @if (request()->routeIs('razen-studio.admin.home.atur.index') ||
                    request()->routeIs('razen-studio.admin.landing-page.reviewer.index'))
                    <a href="#landing_page" class="active">
                    @else
                    <a href="#landing_page">
                    @endif
                        <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                        <span class="label">Landing Page</span>
                    </a>
                    <ul id="landing_page">
                        <li>
                            @if (request()->routeIs('razen-studio.admin.home.atur.index'))
                                <a href="#home" class="active">
                            @else
                                <a href="#home">
                            @endif
                                <span class="label">Home</span>
                            </a>
                            <ul id="home">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.home.atur.index'))
                                        <a href="{{ route('razen-studio.admin.home.atur.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.home.atur.index') }}">
                                    @endif
                                        <span class="label">Atur</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-studio.admin.landing-page.reviewer.index'))
                                <a href="#reviewer" class="active">
                            @else
                                <a href="#reviewer">
                            @endif
                                <span class="label">Reviewer</span>
                            </a>
                            <ul id="reviewer">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.landing-page.reviewer.index'))
                                        <a href="{{ route('razen-studio.admin.landing-page.reviewer.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.landing-page.reviewer.index') }}">
                                    @endif
                                        <span class="label">Atur</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Menu End -->

        <!-- Mobile Buttons Start -->
        <div class="mobile-buttons-container">
            <!-- Scrollspy Mobile Button Start -->
            <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
                <i data-acorn-icon="menu-dropdown"></i>
            </a>
            <!-- Scrollspy Mobile Button End -->

            <!-- Scrollspy Mobile Dropdown Start -->
            <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
            <!-- Scrollspy Mobile Dropdown End -->

            <!-- Menu Button Start -->
            <a href="#" id="mobileMenuButton" class="menu-button">
                <i data-acorn-icon="menu"></i>
            </a>
            <!-- Menu Button End -->
        </div>
        <!-- Mobile Buttons End -->
    </div>
    <div class="nav-shadow"></div>
</div>
