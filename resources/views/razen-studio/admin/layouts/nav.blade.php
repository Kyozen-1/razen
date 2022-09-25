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
                    request()->routeIs('razen-studio.admin.landing-page.reviewer.index') ||
                    request()->routeIs('razen-studio.admin.landing-page.brand.index') ||
                    request()->routeIs('razen-studio.admin.landing-page.official-partner.index')||
                    request()->routeIs('razen-studio.admin.landing-page.footer.index') ||
                    request()->routeIs('razen-studio.admin.social-media-engagement.atur.index') ||
                    request()->routeIs('razen-studio.admin.social-media-engagement.instagram.index') ||
                    request()->routeIs('razen-studio.admin.social-media-engagement.tik-tok.index') ||
                    request()->routeIs('razen-studio.admin.social-media-engagement.youtube.index') ||
                    request()->routeIs('razen-studio.admin.social-media-engagement.twitter.index') ||
                    request()->routeIs('razen-studio.admin.social-media-engagement.facebook.index') ||
                    request()->routeIs('razen-studio.admin.social-media-engagement.marketplace.index') ||
                    request()->routeIs('razen-studio.admin.social-media-engagement.google-my-business.index') ||
                    request()->routeIs('razen-studio.admin.social-media-engagement.playstore.index') ||
                    request()->routeIs('razen-studio.admin.video-production.atur.index') ||
                    request()->routeIs('razen-studio.admin.video-production.video-animasi.index') ||
                    request()->routeIs('razen-studio.admin.video-production.video-konten-sosmed.index')||
                    request()->routeIs('razen-studio.admin.video-production.video-company-profile.index') ||
                    request()->routeIs('razen-studio.admin.commercial-photography.atur.index') ||
                    request()->routeIs('razen-studio.admin.web-development.atur.index') ||
                    request()->routeIs('razen-studio.admin.visual-branding-design.atur.index') ||
                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index') ||
                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.index') ||
                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.index') ||
                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.index') ||
                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.index') ||
                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.index') ||
                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.index') ||
                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.index') ||
                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.index') ||
                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.index') ||
                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.index') ||
                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index') ||
                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.index') ||
                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.index') ||
                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.index') ||
                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.index') ||
                    request()->routeIs('razen-studio.admin.digital-campaign.atur.index') ||
                    request()->routeIs('razen-studio.admin.digital-campaign.iklan-instagram.index') ||
                    request()->routeIs('razen-studio.admin.digital-campaign.iklan-facebook.index') ||
                    request()->routeIs('razen-studio.admin.digital-campaign.iklan-google.index') ||
                    request()->routeIs('razen-studio.admin.digital-campaign.iklan-youtube.index') ||
                    request()->routeIs('razen-studio.admin.social-media-management.atur.index') ||
                    request()->routeIs('razen-studio.admin.search-engine-optimization.atur.index') ||
                    request()->routeIs('razen-studio.admin.about.atur.index') ||
                    request()->routeIs('razen-studio.admin.about.gallery.index') ||
                    request()->routeIs('razen-studio.admin.how-it-works.atur.index') ||
                    request()->routeIs('razen-studio.admin.portofolio.atur.index') ||
                    request()->routeIs('razen-studio.admin.why-razen-studio.atur.index') ||
                    request()->routeIs('razen-studio.admin.freelancer-agency.atur.index') ||
                    request()->routeIs('razen-studio.admin.contact.atur.index')
                    )
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
                            @if (request()->routeIs('razen-studio.admin.social-media-engagement.atur.index') ||
                            request()->routeIs('razen-studio.admin.social-media-engagement.instagram.index') ||
                            request()->routeIs('razen-studio.admin.social-media-engagement.tik-tok.index') ||
                            request()->routeIs('razen-studio.admin.social-media-engagement.youtube.index') ||
                            request()->routeIs('razen-studio.admin.social-media-engagement.twitter.index') ||
                            request()->routeIs('razen-studio.admin.social-media-engagement.facebook.index') ||
                            request()->routeIs('razen-studio.admin.social-media-engagement.marketplace.index') ||
                            request()->routeIs('razen-studio.admin.social-media-engagement.google-my-business.index') ||
                            request()->routeIs('razen-studio.admin.social-media-engagement.playstore.index'))
                                <a href="#social_media_engagement" class="active">
                            @else
                                <a href="#social_media_engagement">
                            @endif
                                <span class="label">Social Media Engagement</span>
                            </a>
                            <ul id="social_media_engagement">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.social-media-engagement.atur.index'))
                                        <a href="{{ route('razen-studio.admin.social-media-engagement.atur.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.social-media-engagement.atur.index') }}">
                                    @endif
                                        <span class="label">Atur</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.social-media-engagement.instagram.index'))
                                        <a href="{{ route('razen-studio.admin.social-media-engagement.instagram.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.social-media-engagement.instagram.index') }}">
                                    @endif
                                        <span class="label">Instagram</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.social-media-engagement.tik-tok.index'))
                                        <a href="{{ route('razen-studio.admin.social-media-engagement.tik-tok.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.social-media-engagement.tik-tok.index') }}">
                                    @endif
                                        <span class="label">TikTok</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.social-media-engagement.youtube.index'))
                                        <a href="{{ route('razen-studio.admin.social-media-engagement.youtube.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.social-media-engagement.youtube.index') }}">
                                    @endif
                                        <span class="label">Youtube</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.social-media-engagement.twitter.index'))
                                        <a href="{{ route('razen-studio.admin.social-media-engagement.twitter.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.social-media-engagement.twitter.index') }}">
                                    @endif
                                        <span class="label">Twitter</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.social-media-engagement.facebook.index'))
                                        <a href="{{ route('razen-studio.admin.social-media-engagement.facebook.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.social-media-engagement.facebook.index') }}">
                                    @endif
                                        <span class="label">Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.social-media-engagement.marketplace.index'))
                                        <a href="{{ route('razen-studio.admin.social-media-engagement.marketplace.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.social-media-engagement.marketplace.index') }}">
                                    @endif
                                        <span class="label">Marketplace</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.social-media-engagement.google-my-business.index'))
                                        <a href="{{ route('razen-studio.admin.social-media-engagement.google-my-business.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.social-media-engagement.google-my-business.index') }}">
                                    @endif
                                        <span class="label">Google My Business</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.social-media-engagement.playstore.index'))
                                        <a href="{{ route('razen-studio.admin.social-media-engagement.playstore.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.social-media-engagement.playstore.index') }}">
                                    @endif
                                        <span class="label">Playstore</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-studio.admin.video-production.atur.index') ||
                            request()->routeIs('razen-studio.admin.video-production.video-animasi.index') ||
                            request()->routeIs('razen-studio.admin.video-production.video-konten-sosmed.index') ||
                            request()->routeIs('razen-studio.admin.video-production.video-company-profile.index'))
                                <a href="#video_production" class="active">
                            @else
                                <a href="#video_production">
                            @endif
                                <span class="label">Video Production</span>
                            </a>
                            <ul id="video_production">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.video-production.atur.index'))
                                        <a href="{{ route('razen-studio.admin.video-production.atur.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.video-production.atur.index') }}">
                                    @endif
                                        <span class="label">Atur</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.video-production.video-animasi.index'))
                                        <a href="{{ route('razen-studio.admin.video-production.video-animasi.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.video-production.video-animasi.index') }}">
                                    @endif
                                        <span class="label">Video Animasi</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.video-production.video-konten-sosmed.index'))
                                        <a href="{{ route('razen-studio.admin.video-production.video-konten-sosmed.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.video-production.video-konten-sosmed.index') }}">
                                    @endif
                                        <span class="label">Video Konten Sosmed</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.video-production.video-company-profile.index'))
                                        <a href="{{ route('razen-studio.admin.video-production.video-company-profile.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.video-production.video-company-profile.index') }}">
                                    @endif
                                        <span class="label">Video Company Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-studio.admin.commercial-photography.atur.index'))
                                <a href="#commercial_photography" class="active">
                            @else
                                <a href="#commercial_photography">
                            @endif
                                <span class="label">Commercial Photography</span>
                            </a>
                            <ul id="commercial_photography">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.commercial-photography.atur.index'))
                                        <a href="{{ route('razen-studio.admin.commercial-photography.atur.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.commercial-photography.atur.index') }}">
                                    @endif
                                        <span class="label">Atur</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-studio.admin.web-development.atur.index'))
                                <a href="#web_development" class="active">
                            @else
                                <a href="#web_development">
                            @endif
                                <span class="label">Web Development</span>
                            </a>
                            <ul id="web_development">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.web-development.atur.index'))
                                        <a href="{{ route('razen-studio.admin.web-development.atur.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.web-development.atur.index') }}">
                                    @endif
                                        <span class="label">Atur</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-studio.admin.visual-branding-design.atur.index') ||
                            request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index') ||
                            request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.index') ||
                            request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.index') ||
                            request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.index') ||
                            request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.index') ||
                            request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.index') ||
                            request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.index') ||
                            request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.index') ||
                            request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.index') ||
                            request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.index') ||
                            request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.index') ||
                            request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index') ||
                            request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.index') ||
                            request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.index') ||
                            request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.index') ||
                            request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.index'))
                                <a href="#visual_branding_design" class="active">
                            @else
                                <a href="#visual_branding_design">
                            @endif
                                <span class="label">Visual Branding Design</span>
                            </a>
                            <ul id="visual_branding_design">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.visual-branding-design.atur.index'))
                                        <a href="{{ route('razen-studio.admin.visual-branding-design.atur.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.visual-branding-design.atur.index') }}">
                                    @endif
                                        <span class="label">Atur</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index') ||
                                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.index') ||
                                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.index') ||
                                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.index') ||
                                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.index') ||
                                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.index') ||
                                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.index') ||
                                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.index') ||
                                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.index') ||
                                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.index') ||
                                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.index') ||
                                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index') ||
                                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.index') ||
                                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.index') ||
                                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.index') ||
                                    request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.index'))
                                        <a href="#jasa_desain_grafis" class="active">
                                    @else
                                        <a href="#jasa_desain_grafis">
                                    @endif
                                        <span class="label">Jasa Desain Grafis</span>
                                    </a>
                                    <ul id="jasa_desain_grafis">
                                        <li>
                                            @if (request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index'))
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index') }}">
                                            @endif
                                                <span class="label">Atur</span>
                                            </a>
                                        </li>
                                        <li>
                                            @if (request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.index'))
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.index') }}">
                                            @endif
                                                <span class="label">Desain Logo</span>
                                            </a>
                                        </li>
                                        <li>
                                            @if (request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.index'))
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.index') }}">
                                            @endif
                                                <span class="label">Desain Promosi Digital</span>
                                            </a>
                                        </li>
                                        <li>
                                            @if (request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.index'))
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.index') }}">
                                            @endif
                                                <span class="label">Desain Feed Instagram</span>
                                            </a>
                                        </li>
                                        <li>
                                            @if (request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.index'))
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.index') }}">
                                            @endif
                                                <span class="label">Desain Branding Kit</span>
                                            </a>
                                        </li>
                                        <li>
                                            @if (request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.index'))
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.index') }}">
                                            @endif
                                                <span class="label">Desain Kartu Nama</span>
                                            </a>
                                        </li>
                                        <li>
                                            @if (request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.index'))
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.index') }}">
                                            @endif
                                                <span class="label">Desain Spanduk Banner</span>
                                            </a>
                                        </li>
                                        <li>
                                            @if (request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.index'))
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.index') }}">
                                            @endif
                                                <span class="label">Desain Brosur</span>
                                            </a>
                                        </li>
                                        <li>
                                            @if (request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.index'))
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.index') }}">
                                            @endif
                                                <span class="label">Desain Kemasan</span>
                                            </a>
                                        </li>
                                        <li>
                                            @if (request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.index'))
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.index') }}">
                                            @endif
                                                <span class="label">Desain Label Produk</span>
                                            </a>
                                        </li>
                                        <li>
                                            @if (request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.index'))
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.index') }}">
                                            @endif
                                                <span class="label">Desain Stempel</span>
                                            </a>
                                        </li>
                                        <li>
                                            @if (request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index'))
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index') }}">
                                            @endif
                                                <span class="label">Desain Kalender</span>
                                            </a>
                                        </li>
                                        <li>
                                            @if (request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.index'))
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.index') }}">
                                            @endif
                                                <span class="label">Desain Branding Event</span>
                                            </a>
                                        </li>
                                        <li>
                                            @if (request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.index'))
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.index') }}">
                                            @endif
                                                <span class="label">Desain Amplop</span>
                                            </a>
                                        </li>
                                        <li>
                                            @if (request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.index'))
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.index') }}">
                                            @endif
                                                <span class="label">Desain Kop Surat</span>
                                            </a>
                                        </li>
                                        <li>
                                            @if (request()->routeIs('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.index'))
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.index') }}">
                                            @endif
                                                <span class="label">Desain Merchandise</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-studio.admin.digital-campaign.atur.index') ||
                            request()->routeIs('razen-studio.admin.digital-campaign.iklan-instagram.index') ||
                            request()->routeIs('razen-studio.admin.digital-campaign.iklan-facebook.index') ||
                            request()->routeIs('razen-studio.admin.digital-campaign.iklan-google.index') ||
                            request()->routeIs('razen-studio.admin.digital-campaign.iklan-youtube.index')
                            )
                                <a href="#digital_campaign" class="active">
                            @else
                                <a href="#digital_campaign">
                            @endif
                                <span class="label">Digital Campaign</span>
                            </a>
                            <ul id="digital_campaign">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.digital-campaign.atur.index'))
                                        <a href="{{ route('razen-studio.admin.digital-campaign.atur.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.digital-campaign.atur.index') }}">
                                    @endif
                                        <span class="label">Atur</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.digital-campaign.iklan-instagram.index'))
                                        <a href="{{ route('razen-studio.admin.digital-campaign.iklan-instagram.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.digital-campaign.iklan-instagram.index') }}">
                                    @endif
                                        <span class="label">Iklan Instagram</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.digital-campaign.iklan-facebook.index'))
                                        <a href="{{ route('razen-studio.admin.digital-campaign.iklan-facebook.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.digital-campaign.iklan-facebook.index') }}">
                                    @endif
                                        <span class="label">Iklan Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.digital-campaign.iklan-google.index'))
                                        <a href="{{ route('razen-studio.admin.digital-campaign.iklan-google.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.digital-campaign.iklan-google.index') }}">
                                    @endif
                                        <span class="label">Iklan Google</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.digital-campaign.iklan-youtube.index'))
                                        <a href="{{ route('razen-studio.admin.digital-campaign.iklan-youtube.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.digital-campaign.iklan-youtube.index') }}">
                                    @endif
                                        <span class="label">Iklan Youtube</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-studio.admin.social-media-management.atur.index'))
                                <a href="#social_media_management" class="active">
                            @else
                                <a href="#social_media_management">
                            @endif
                                <span class="label">Social Media Management</span>
                            </a>
                            <ul id="social_media_management">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.social-media-management.atur.index'))
                                        <a href="{{ route('razen-studio.admin.social-media-management.atur.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.social-media-management.atur.index') }}">
                                    @endif
                                        <span class="label">Atur</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-studio.admin.search-engine-optimization.atur.index'))
                                <a href="#search_engine_optimization" class="active">
                            @else
                                <a href="#search_engine_optimization">
                            @endif
                                <span class="label">Search Engine Optimization</span>
                            </a>
                            <ul id="search_engine_optimization">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.search-engine-optimization.atur.index'))
                                        <a href="{{ route('razen-studio.admin.search-engine-optimization.atur.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.search-engine-optimization.atur.index') }}">
                                    @endif
                                        <span class="label">Atur</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-studio.admin.about.atur.index') ||
                            request()->routeIs('razen-studio.admin.about.gallery.index'))
                                <a href="#about" class="active">
                            @else
                                <a href="#about">
                            @endif
                                <span class="label">About</span>
                            </a>
                            <ul id="about">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.about.atur.index'))
                                        <a href="{{ route('razen-studio.admin.about.atur.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.about.atur.index') }}">
                                    @endif
                                        <span class="label">Atur</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.about.gallery.index'))
                                        <a href="{{ route('razen-studio.admin.about.gallery.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.about.gallery.index') }}">
                                    @endif
                                        <span class="label">Gallery</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-studio.admin.how-it-works.atur.index'))
                                <a href="#how_it_work" class="active">
                            @else
                                <a href="#how_it_work">
                            @endif
                                <span class="label">How It Works</span>
                            </a>
                            <ul id="how_it_work">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.how-it-works.atur.index'))
                                        <a href="{{ route('razen-studio.admin.how-it-works.atur.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.how-it-works.atur.index') }}">
                                    @endif
                                        <span class="label">Atur</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-studio.admin.portofolio.atur.index'))
                                <a href="#portofolio" class="active">
                            @else
                                <a href="#portofolio">
                            @endif
                                <span class="label">Portofolio</span>
                            </a>
                            <ul id="portofolio">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.portofolio.atur.index'))
                                        <a href="{{ route('razen-studio.admin.portofolio.atur.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.portofolio.atur.index') }}">
                                    @endif
                                        <span class="label">Atur</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-studio.admin.why-razen-studio.atur.index'))
                                <a href="#why-razen-studio" class="active">
                            @else
                                <a href="#why-razen-studio">
                            @endif
                                <span class="label">Why Razen Studio</span>
                            </a>
                            <ul id="why-razen-studio">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.why-razen-studio.atur.index'))
                                        <a href="{{ route('razen-studio.admin.why-razen-studio.atur.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.why-razen-studio.atur.index') }}">
                                    @endif
                                        <span class="label">Atur</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-studio.admin.freelancer-agency.atur.index'))
                                <a href="#freelancer-agency" class="active">
                            @else
                                <a href="#freelancer-agency">
                            @endif
                                <span class="label">Freelancer Agency</span>
                            </a>
                            <ul id="freelancer-agency">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.freelancer-agency.atur.index'))
                                        <a href="{{ route('razen-studio.admin.freelancer-agency.atur.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.freelancer-agency.atur.index') }}">
                                    @endif
                                        <span class="label">Atur</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-studio.admin.contact.atur.index'))
                                <a href="#contact" class="active">
                            @else
                                <a href="#contact">
                            @endif
                                <span class="label">Contact</span>
                            </a>
                            <ul id="contact">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.contact.atur.index'))
                                        <a href="{{ route('razen-studio.admin.contact.atur.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.contact.atur.index') }}">
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
                        <li>
                            @if (request()->routeIs('razen-studio.admin.landing-page.brand.index'))
                                <a href="#brand" class="active">
                            @else
                                <a href="#brand">
                            @endif
                                <span class="label">Brand</span>
                            </a>
                            <ul id="brand">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.landing-page.brand.index'))
                                        <a href="{{ route('razen-studio.admin.landing-page.brand.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.landing-page.brand.index') }}">
                                    @endif
                                        <span class="label">Atur</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-studio.admin.landing-page.official-partner.index'))
                                <a href="#official_partner" class="active">
                            @else
                                <a href="#official_partner">
                            @endif
                                <span class="label">Official Partner</span>
                            </a>
                            <ul id="official_partner">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.landing-page.official-partner.index'))
                                        <a href="{{ route('razen-studio.admin.landing-page.official-partner.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.landing-page.official-partner.index') }}">
                                    @endif
                                        <span class="label">Atur</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-studio.admin.landing-page.footer.index'))
                                <a href="#footer" class="active">
                            @else
                                <a href="#footer">
                            @endif
                                <span class="label">Footer</span>
                            </a>
                            <ul id="footer">
                                <li>
                                    @if (request()->routeIs('razen-studio.admin.landing-page.footer.index'))
                                        <a href="{{ route('razen-studio.admin.landing-page.footer.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-studio.admin.landing-page.footer.index') }}">
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
