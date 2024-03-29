@php
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioFooter;
    use App\Models\Profil;


    $profil = Profil::first();

    $data = LandingpageRazenstudioFooter::first();
    $solution = json_decode($data->solution, true);
    $company = json_decode($data->company, true);
    $get_in_touch = json_decode($data->get_in_touch, true);
@endphp

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    @include('landing-page-razen-studio.layouts.head')
</head>

<body class="header-fixed preloading">

    <div id="preload" class="preload-container">
        <div class="preload-logo"></div>
    </div>

    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">
            <!-- Header Wrap -->
            <div id="site-header-wrap">
                <!-- Top Bar -->
                <div id="top-bar">
                    <div id="top-bar-inner">
                        <div class="top-bar-inner-wrap">
                            <div class="top-bar-content">
                                <div class="inner text-white link-style-2">
                                    <span class="phone content section-16px-regular"><a href="tel:{{$profil->no_hp}}">{{$profil->no_hp}}</a></span>
                                    <span class="mail content section-16px-regular"><a
                                            href="mailto:{{$profil->email}}">{{$profil->email}}</a></span>
                                </div>
                            </div>
                            <!-- /.top-bar-content -->
                        </div>
                    </div>
                </div>
                <!-- /#top-bar -->

                <!-- Header -->
                <header id="site-header">
                    <!-- /#site-header-inner -->
                    <div class="wrap-inner clearfix">
                        <div id="site-logo" class="clearfix ml-5">
                            <div id="site-log-inner">
                                <a href="{{ url('/') }}" rel="home" class="main-logo">
                                    <img src="{{ asset('images/razen-studio/logo/'.$profil->logo) }}" alt="images">
                                </a>
                            </div>
                        </div>
                        <!-- /#site-logo -->

                        <div class="mobile-button">
                            <span></span>
                        </div>
                        <!-- /.mobile-button -->
                        <nav id="main-nav" class="main-nav mr-0">
                            <ul id="menu-primary-menu" class="menu">
                                <li class="menu-item current-menu-item">
                                    <a href="{{ url('/') }}">Beranda</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Perusahaan</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Layanan</a>
                                </li>
                                <li class="menu-item">
                                    <a href="https://shop.razen.co.id/stores/razen-studio" target="blank">E-commerce</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{ route('social-media-engagement') }}">Social Media Engagement</a></li>
                                        <li class="menu-item"><a href="{{ route('video-production') }}">Video Production</a></li>
                                        <li class="menu-item"><a href="{{ route('commercial-photography') }}">Commercial Photography</a></li>
                                        <li class="menu-item"><a href="{{ route('web-development') }}">Web Development</a></li>
                                        <li class="menu-item"><a href="{{ route('visual-branding-design') }}">Visual Branding & Design</a></li>
                                        <li class="menu-item"><a href="{{ route('digital-campaign') }}">Digital Campaign</a></li>
                                        <li class="menu-item"><a href="{{ route('social-media-management') }}">Social Media Management</a></li>
                                        <li class="menu-item"><a href="{{ route('jasa-seo') }}">SEO</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">How It Works</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{ route('about') }}">About</a></li>
                                        <li class="menu-item"><a href="{{ route('how-it-works') }}">Cara Kerja Razen Studio</a></li>
                                        <li class="menu-item"><a href="{{ route('portofolio') }}">Portofolio</a></li>
                                        <li class="menu-item"><a href="{{ route('why-razen-studio') }}">Razen Studio vs Solusi Lainnya</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Community</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{ route('help-center') }}">Help Center</a></li>
                                        <li class="menu-item"><a href="{{ route('blog') }}">Blog</a></li>
                                        <li class="menu-item"><a href="{{ route('ebook') }}">Ebook</a></li>
                                        <li class="menu-item"><a href="{{ route('razen-studio-academy') }}">Razen Studio Community</a></li>
                                        <li class="menu-item"><a href="{{ route('freelancer-agency') }}">Freelancer/Agency?</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#">E-learning</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Blog</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('contact') }}">Kontak</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- /#main-nav -->
                        {{-- <div class="header-menu">
                            <a href="#" class="header-menu-trigger icon-Group-1199"></a>
                        </div> --}}
                    </div>
                </header>
                <!-- /#site-header -->
            </div>
            <!-- #site-header-wrap -->

            @yield('content')

            <!-- Footer -->
            <footer id="footer" class="clearfix">
                <div id="footer-widgets" class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="logo-footer margin-bottom-20">
                                <a href="index.html" rel="home" class="main-logo">
                                    <img src="{{ asset('olux/assets/images/logo/logo-footer.png') }}" alt="images">
                                </a>
                            </div>
                            <p class="text-white line-height-32 margin-bottom-20">{{$data->deskripsi}}</p>
                        </div>
                        <div class="col-md-9">
                            <div class="footer-widgets-nav-menu text-white">
                                <div class="menu-1">
                                    <h3 class="widget-title-link-wrap text-white">Solution</h3>
                                    <ul class="link-wrap">
                                        @foreach ($solution as $item)
                                            <li><a href="{{ route($item['link']) }}">{{$item['judul']}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="menu-2">
                                    <h3 class="widget-title-link-wrap text-white">Company</h3>
                                    <ul class="link-wrap">
                                        @foreach ($company as $item)
                                            <li><a href="{{ route($item['link']) }}">{{$item['judul']}}</a></li>
                                        @endforeach
                                        <li><a href="#">Our Clients</a></li>
                                    </ul>
                                </div>
                                <div class="menu-3">
                                    <h3 class="widget-title-link-wrap text-white">Kontak</h3>
                                    <ul class="widget-list-contact text-white link-style-2">
                                        <li>
                                            <a href="tel:{{$profil->no_hp}}"
                                            class="meta-phone section-16px-regular-montserrat">{{$profil->no_hp}}</a>
                                        </li>
                                        <li>
                                            <a href="mailto:{{$profil->email}}"
                                            class="meta-mail section-16px-regular-montserrat">{{$profil->email}}</a>
                                        </li>
                                        <li>
                                            <h3 class="meta-address section-16px-regular-montserrat text-white">{{$profil->alamat}}</h3>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer><!-- /#footer -->
            <!-- Bottom -->
            <div id="bottom" class="clearfix has-spacer">
                <div id="bottom-bar-inner" class="container">
                    <div class="bottom-bar-inner-wrap">
                        <div class="bottom-bar-content">
                            <div id="copyright">© 2022 <span class="text"> Razen, All Rights Reserved.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /#bottom -->

        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <a id="scroll-top"></a>
    @include('landing-page-razen-studio.layouts.js')
</body>

</html>
