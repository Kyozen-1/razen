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
                                    <span class="phone content section-16px-regular"><a href="tel:012345678">(+706)
                                            898-0752</a></span>
                                    <span class="mail content section-16px-regular"><a
                                            href="mailto:olux.design@gmail.com">olux.design@gmail.com</a></span>
                                </div>
                            </div>
                            <!-- /.top-bar-content -->
                        </div>
                    </div>
                </div>
                <!-- /#top-bar -->

                <!-- Header -->
                <header id="site-header">
                    <div id="site-header-inner">
                        <div class="wrap-inner clearfix">
                            <div id="site-logo" class="clearfix">
                                <div id="site-log-inner">
                                    <a href="index.html" rel="home" class="main-logo">
                                        <img src="{{ asset('olux/assets/images/logo/logo-header.png') }}" alt="images">
                                    </a>
                                </div>
                            </div>
                            <!-- /#site-logo -->

                            <div class="mobile-button">
                                <span></span>
                            </div>
                            <!-- /.mobile-button -->
                            <nav id="main-nav" class="main-nav">
                                <ul id="menu-primary-menu" class="menu">
                                    <li class="menu-item current-menu-item">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="menu-item current-menu-item">
                                        <a href="#">Marketplace</a>
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
                                    <li class="menu-item current-menu-item">
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>
                                    <li class="menu-item current-menu-item">
                                        <a href="#">Login</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- /#main-nav -->
                            {{-- <div class="header-menu">
                                <a href="#" class="header-menu-trigger icon-Group-1199"></a>
                            </div> --}}
                        </div>
                        {{-- <div class="side-menu__block">
                            <div class="side-menu__block-overlay custom-cursor__overlay"></div>
                            <div class="side-menu__block-inner">
                                <div class="side-menu__top justify-content-end">
                                    <a href="#" class="side-menu__toggler side-menu__close-btn"><img
                                            src="{{ asset('olux/assets/icon/close-1-1.png') }}" alt="images"></a>
                                </div>
                                <div class="side-menu__top-introduce">
                                    <a href="index.html" rel="home" class="main-logo">
                                        <img src="{{ asset('olux/assets/images/logo/logo-header.png') }}" alt="images">
                                    </a>
                                    <p>Etiam efficitur, metus in cursus imperdiet, neque nisl porta erat, nec volutpat
                                        felis lacus a tellus. Nunc tristique nulla nisi, a viverra dui auctor vitae.
                                        Vestibulum mollis commodo leo in hendrerit. Nam convallis ac lacus luctus
                                        vestibulum. Donec cursus tellus id neque convallis blandit.</p>
                                    <hr>
                                </div>
                                <div class="side-menu__top-lastest">
                                    <div class="side-menu__title">
                                        My Latest Work
                                    </div>
                                    <div class="side-menu__lastest">
                                        <div class="side-menu__lastest-item">
                                            <img src="{{ asset('olux/assets/images/image-box/side-menu-latest-1.jpg') }}" alt="images">
                                            <div class="side-menu__lastest-layer">
                                                <a href="blog-single.html" class="side-menu__lastest-icon"></a>
                                            </div>
                                        </div>
                                        <div class="side-menu__lastest-item">
                                            <img src="{{ asset('olux/assets/images/image-box/side-menu-latest-2.jpg') }}" alt="images">
                                            <div class="side-menu__lastest-layer">
                                                <a href="blog-single.html" class="side-menu__lastest-icon"></a>
                                            </div>
                                        </div>
                                        <div class="side-menu__lastest-item">
                                            <img src="{{ asset('olux/assets/images/image-box/side-menu-latest-3.jpg') }}" alt="images">
                                            <div class="side-menu__lastest-layer">
                                                <a href="blog-single.html" class="side-menu__lastest-icon"></a>
                                            </div>
                                        </div>
                                        <div class="side-menu__lastest-item">
                                            <img src="{{ asset('olux/assets/images/image-box/side-menu-latest-4.jpg') }}" alt="images">
                                            <div class="side-menu__lastest-layer">
                                                <a href="blog-single.html" class="side-menu__lastest-icon"></a>
                                            </div>
                                        </div>
                                        <div class="side-menu__lastest-item">
                                            <img src="{{ asset('olux/assets/images/image-box/side-menu-latest-5.jpg') }}" alt="images">
                                            <div class="side-menu__lastest-layer">
                                                <a href="blog-single.html" class="side-menu__lastest-icon"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="side-menu__top-social">
                                    <ul class="widget-social">
                                        <li>Follow Me :</li>
                                        <li><a href="#">Fb.</a></li>
                                        <li><a href="#">Be.</a></li>
                                        <li><a href="#">Tw.</a></li>
                                        <li><a href="#">In.</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        <!-- /.wrap-inner -->
                    </div>
                    <!-- /#site-header-inner -->
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
                            <p class="text-white line-height-32 margin-bottom-20">Razen Group merupakan konsultan sekaligus Creative & Digital Agency Hub No.1 di Indonesia yang bertujuan membantu bisnis dalam melakukan Digital Marketing yang sukses di berbagai platform.</p>
                        </div>
                        <div class="col-md-9">
                            <div class="footer-widgets-nav-menu text-white">
                                <div class="menu-1">
                                    <h3 class="widget-title-link-wrap text-white">Solution</h3>
                                    <ul class="link-wrap">
                                        <li><a href="services.html">Social Media Engagement</a></li>
                                        <li><a href="services.html">Branding & Design</a></li>
                                        <li><a href="services.html">Video Production</a></li>
                                        <li><a href="services.html">Foto Produk</a></li>
                                        <li><a href="services.html">Digital Campaign</a></li>
                                        <li><a href="services.html">Social Media Management</a></li>
                                        <li><a href="services.html">Website Solution</a></li>
                                        <li><a href="services.html">SEO</a></li>
                                    </ul>
                                </div>
                                <div class="menu-2">
                                    <h3 class="widget-title-link-wrap text-white">Company</h3>
                                    <ul class="link-wrap">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="team.html">Razen Studio vs Other</a></li>
                                        <li><a href="team.html">Partners</a></li>
                                        <li><a href="team.html">Portofolio</a></li>
                                        <li><a href="team.html">Our Clients</a></li>
                                        <li><a href="team.html">Careers</a></li>
                                    </ul>
                                </div>
                                <div class="menu-3">
                                    <h3 class="widget-title-link-wrap text-white">Get In Touch</h3>
                                    <ul class="widget-list-contact text-white link-style-2">
                                        <li><a href="tel:012345678"
                                                class="meta-phone section-16px-regular-montserrat">+62 812 3456 6636</a></li>
                                        <li><a href="mailto:hello@razenstudio.co.id"
                                                class="meta-mail section-16px-regular-montserrat">hello@razenstudio.co.id</a>
                                        </li>
                                        <li>
                                            <h3 class="meta-address section-16px-regular-montserrat text-white">Kota Madiun Jawa Timur</h3>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget-social-footer">
                    <div class="container-fluid">
                        <ul class="widget-social-footer-item text-center link-style-2">
                            <li><a href="#">Fb.</a></li>
                            <li><a href="#">Be.</a></li>
                            <li><a href="#">Tw.</a></li>
                            <li><a href="#">In.</a></li>
                            <li>
                                <h3>Follow Me:</h3>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer><!-- /#footer -->
            <!-- Bottom -->
            <div id="bottom" class="clearfix has-spacer">
                <div id="bottom-bar-inner" class="container">
                    <div class="bottom-bar-inner-wrap">
                        <div class="bottom-bar-content">
                            <div id="copyright">© 2022 <span class="text"> ThemesFlat, All Rights Reserved.</span>
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
