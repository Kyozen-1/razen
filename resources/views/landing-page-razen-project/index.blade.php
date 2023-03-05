<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
        <!-- Document Meta
        ============================================= -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--IE Compatibility Meta-->
        <meta name="author" content="razen" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="construction html5 template">
        <link href="{{ asset('razen-project/assets/favicon.png') }}" rel="icon">

        <!-- Fonts
        ============================================= -->
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:100,200,300,400,500,600,700,800%7CDroid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

        <!-- Stylesheets
        ============================================= -->
        <link href="{{ asset('razen-project/assets/css/external.css') }}" rel="stylesheet">
        <!-- Extrnal CSS -->
        <link href="{{ asset('razen-project/assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Boostrap Core CSS -->
        <link href="{{ asset('razen-project/assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('razen-project/assets/css/dark.css') }}" rel="stylesheet">
        <!-- Style CSS -->

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
            <script src="razen-project/assets/js/html5shiv.js"></script>
            <script src="razen-project/assets/js/respond.min.js"></script>
            <![endif]-->

        <!-- Document Title
            ============================================= -->
        <title>{{$profil->nama}}</title>
    </head>
    <body class="dark">
        <div class="preloader">
            <div class="spinner">
                <div class="bounce1">
                </div>
                <div class="bounce2">
                </div>
                <div class="bounce3">
                </div>
            </div>
        </div>
        <header id="navbar-spy" class="full-header dark-header">
            <div id="top-bar" class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 hidden-xs">
                            <ul class="list-inline top-contact">
                                <li>
                                    <p>No. Hp:
                                        <span>{{$profil->no_hp}}</span>
                                    </p>
                                </li>
                                <li>
                                    <p>Email:
                                        <span>{{$profil->email}}</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <!-- .col-md-6 end -->
                        <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                            <ul class="list-inline top-widget">
                                <li class="top-social">
                                    @if ($facebook['status'] == 'ada')
                                        <a href="{{$facebook['tautan']}}" target="_blank"><i class="fa fa-facebook"></i></a>
                                    @else
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    @endif

                                    @if ($twitter['status'] == 'ada')
                                        <a href="{{$twitter['tautan']}}" target="_blank"><i class="fa fa-twitter"></i></a>
                                    @else
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    @endif

                                    @if ($instagram['status'] == 'ada')
                                        <a href="{{$instagram['tautan']}}" target="_blank"><i class="fa fa-instagram"></i></a>
                                    @else
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    @endif

                                    @if ($youtube['status'] == 'ada')
                                        <a href="{{$youtube['tautan']}}" target="_blank"><i class="fa fa-youtube"></i></a>
                                    @else
                                        <a href="#"><i class="fa fa-youtube"></i></a>
                                    @endif
                                </li>
                                <li>
                                    <!-- Modal -->
                                    <!-- .model-quote end -->
                                </li>
                            </ul>
                        </div>
                        <!-- .col-md-6 end -->
                    </div>
                </div>
            </div>
            <nav id="primary-menu" class="navbar navbar-fixed-top style-1">
                <div class="row">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="logo" href="{{ route('razen-project.home') }}">
                                <img src="{{ asset('images/razen-project/logo/'.$profil->logo) }}" alt="Razen Project" height="40px">
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-left">
                                <li class="active">
                                    <a href="#">Beranda</a>
                                </li>
                                <!-- li end -->
                                <li class="">
                                    <a href="https://razenproject.com/virtual/backend/login" target="blank">Virtual</a>
                                </li>
                                <li class="">
                                    <a href="#">FAQs</a>
                                </li>
                                <li class="">
                                    <a href="#">Blog</a>
                                </li>
                                <li class="">
                                    <a href="#">Proses Pemesanan</a>
                                </li>
                                <li class="">
                                    <a href="#">Kontak</a>
                                </li>
                            </ul>

                            <!-- Mod-->
                            <!-- .module-search-->
                            <!-- .module-cart -->
                            <!-- .module-cart end -->

                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
            </nav>
        </header>

        <!-- Hero #2
        ============================================= -->
        <section id="hero-2" class="hero-2">
            <div id="hero-slider" class="hero-slider">

                <!-- Slide Item #1 -->
                <div class="item">
                    <div class="item-bg bg-overlay">
                        <div class="bg-section">
                            <img src="{{ asset('razen-project/assets/images/sliders/9.jpg') }}" alt="Background"/>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="hero-slide">
                                    <div class="slide-heading">
                                        <p>The Best Construction Company</p>
                                    </div>
                                    <div class="slide-title">
                                        <h2>We do only what we are great on !</h2>
                                    </div>
                                    <div class="slide-action">
                                        <a class="btn btn-primary" href="#">read more</a>
                                        <a class="btn btn-secondary pull-right" href="#">get started</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-12 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .container end -->
                </div>
                <!-- .item end -->

                <!-- Slide Item #2 -->
                <div class="item">
                    <div class="item-bg bg-overlay">
                        <div class="bg-section">
                            <img src="{{ asset('razen-project/assets/images/sliders/1.jpg') }}" alt="Background"/>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="hero-slide">
                                    <div class="slide-heading">
                                        <p>delivering professional expertise</p>
                                    </div>
                                    <div class="slide-title">
                                        <h2>Our promise is to build value into every project</h2>
                                    </div>
                                    <div class="slide-action">
                                        <a class="btn btn-primary" href="#">read more</a>
                                        <a class="btn btn-secondary pull-right" href="#">get started</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-12 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .container end -->
                </div>
                <!-- .item end -->

                <!-- Slide Item #3 -->
                <div class="item">
                    <div class="item-bg bg-overlay">
                        <div class="bg-section">
                            <img src="{{ asset('razen-project/assets/images/sliders/5.jpg') }}" alt="Background"/>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="hero-slide">
                                    <div class="slide-heading">
                                        <p>we innovate & design</p>
                                    </div>
                                    <div class="slide-title">
                                        <h2>We have a team capable of maximizing the result</h2>
                                    </div>
                                    <div class="slide-action">
                                        <a class="btn btn-primary" href="#">read more</a>
                                        <a class="btn btn-secondary pull-right" href="#">get started</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-12 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .container end -->
                </div>
                <!-- .item end -->
            </div>
            <!-- #hero-slider end -->
        </section>

        <!-- Call To Action #2
        ============================================= -->
        <section id="cta-2" class="cta pb-0 pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="cta-2 bg-theme">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-7">
                                    <div class="cta-icon">
                                        <i class="lnr lnr-apartment"></i>
                                    </div>
                                    <div class="cta-devider">
                                    </div>
                                    <div class="cta-desc">
                                        <p>Ada Pertanyaan ?</p>
                                        <h5>Konsultasi gratis!, Hubungi kami.</h5>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 cta-action text-right pull-right pull-none-xs">
                                    <a class="btn btn-primary btn-white mr-sm" href="#" data-toggle="modal" data-target="#model-quote" id="modelquote">FAQs</a>
                                    <a class="btn btn-secondary" href="contact-1.html">Kontak</a>

                                </div>
                            </div>
                        </div>
                        <!-- .cta-1 end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #cta-2 end -->

        <!-- Service Block #1
        ============================================= -->
        <section id="service-1" class="service service-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="heading heading-2 text-center">
                            <div class="heading-bg">
                                <p class="mb-0">what we can do ?</p>
                                <h2>our services</h2>
                            </div>
                            <p class="mb-0 mt-md">Razen Project berkembang dibidang jasa design dan konstruksi, terdiri dari design arsitektur, design interior, perencanaan struktur, serta pembuatan bangunan yang berlokasi di Pasar Rebo Jakarta Timur. Kami sebagai kontraktor mengerjakan proyek-proyek konstruksi dengan tepat waktu sesuai time schedule, standar kualitas yang kami berikan adalah yang terbaik.</p>
                        </div>
                        <!-- .heading end -->
                    </div>
                    <!-- .col-md-6 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <!-- Service Block #1 -->
                    <div class="col-xs-12 col-sm-4 col-md-4 service-block">
                        <div class="service-img">
                            <img src="{{ asset('razen-project/assets/images/services/grid/1.jpg') }}" alt="service">
                        </div>
                        <div class="service-content">
                            <img src="{{ asset('razen-project/assets/images/services/icons/i32/1w.png') }}" alt="icons"/>
                            <div class="service-desc">
                                <h4>Mempesona &amp; Efektif</h4>
                                <p>Desain rumah kami lebih mempesona, sehingga selain nyaman, juga membuat bangga. Penggambaran layout kami sangat efektif dan flow arsitekturnya bagus, sehingga nyaman untuk istana keluarga Anda.</p>
                                <a class="read-more" href="#"><i class="fa fa-plus"></i>
                                    <span>read more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-4 end -->

                    <!-- Service Block #2 -->
                    <div class="col-xs-12 col-sm-4 col-md-4 service-block">
                        <div class="service-img">
                            <img src="{{ asset('razen-project/assets/images/services/grid/2.jpg') }}" alt="service">
                        </div>
                        <div class="service-content">
                            <img src="{{ asset('razen-project/assets/images/services/icons/i32/2w.png') }}" alt="icons"/>
                            <div class="service-desc">
                                <h4>Pilihan Material</h4>
                                <p>Material berkualitas tidak akan menampilkan kesempurnaannya, apabila tidak dipasang dengan baik. Kami paham Anda sudah menginvestasikan budget cukup tinggi untuk memilih material berkualitas bagi istana Anda.</p>
                                <a class="read-more" href="#"><i class="fa fa-plus"></i>
                                    <span>read more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-4 end -->

                    <!-- Service Block #3 -->
                    <div class="col-xs-12 col-sm-4 col-md-4 service-block">
                        <div class="service-img">
                            <img src="{{ asset('razen-project/assets/images/services/grid/3.jpg') }}" alt="service">
                        </div>
                        <div class="service-content">
                            <img src="{{ asset('razen-project/assets/images/services/icons/i32/3w.png') }}" alt="icons"/>
                            <div class="service-desc">
                                <h4>Bebas Bocor</h4>
                                <p>Razen Project juga mempertimbangkan konstruksi jangka panjang, BEBAS BOCOR, BEBAS KORSLETING DAN BEBAS RETAK RAMBUT.</p>
                                <a class="read-more" href="#"><i class="fa fa-plus"></i>
                                    <span>read more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-4 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <a class="btn btn-secondary mt-50" href="#">All Services <i class="fa fa-plus ml-xs"></i></a>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>

        <!-- Projects Section
        ============================================= -->
        <section id="projects" class="projects-fullwidth projects-4col bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <div class="heading heading-3 text-center mb-0">
                            <div class="heading-bg">
                                <p class="mb-0">great &amp; awesome works</p>
                                <h2>Proyek Kami</h2>
                            </div>
                        </div>
                        <!-- .heading end -->
                    </div>
                    <!-- .col-md-8 end -->
                </div>
            </div>
            <!-- .container end -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Projects Filter
                    ============================================= -->
                    <div class="col-xs-12 col-sm-12 col-md-12 projects-filter">
                        <ul class="list-inline">
                            <li>
                                <a class="active-filter" href="#" data-filter="*">Semua Proyek</a>
                            </li>
                            @foreach ($kategori_project as $id => $nama)
                                <li>
                                    <a href="#" data-filter=".{{$nama}}">{{$nama}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- .projects-filter end -->
                </div>
                <!-- .row end -->

                <!-- Projects Item
                ============================================= -->
                <div id="projects-all" class="row">
                    @foreach ($item_virtual_tours as $item_virtual_tour)
                        <!-- Project Item #1 -->
                        <div class="col-xs-12 col-sm-6 col-md-3 project-item {{$item_virtual_tour->master_kategori_project->nama}}">
                            <div class="project-img">
                                <img class="" src="{{ asset('images/razen-project/item-virtual-tour/'.$item_virtual_tour->thumb) }}" alt="{{$item_virtual_tour->master_kategori_project->nama}}"/>
                                <div class="project-hover">
                                    <div class="project-meta">
                                        <h6>{{$item_virtual_tour->master_kategori_project->nama}}</h6>
                                        <h4>
                                            <a href="{{$item_virtual_tour->link}}" target="blank">{{$item_virtual_tour->nama}}</a>
                                        </h4>
                                    </div>
                                    <div class="project-zoom">
                                        <a class="img-popup" href="{{ asset('images/razen-project/item-virtual-tour/'.$item_virtual_tour->thumb) }}" title="{{$item_virtual_tour->nama}}"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                                <!-- .project-hover end -->
                            </div>
                            <!-- .project-img end -->

                        </div>
                        <!-- .project-item end -->
                    @endforeach

                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>

        <!-- Projects Section
        ============================================= -->
        {{-- <section id="projects" class="projects-fullwidth projects-4col bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <div class="heading heading-3 text-center mb-0">
                            <div class="heading-bg">
                                <p class="mb-0">great &amp; awesome works</p>
                                <h2>our projects</h2>
                            </div>
                        </div>
                        <!-- .heading end -->
                    </div>
                    <!-- .col-md-8 end -->
                </div>
            </div>
            <!-- .container end -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Projects Filter
                    ============================================= -->
                    <div class="col-xs-12 col-sm-12 col-md-12 projects-filter">
                        <ul class="list-inline">
                            <li>
                                <a class="active-filter" href="#" data-filter="*">All Projects</a>
                            </li>
                            <li>
                                <a href="#" data-filter=".interior">Interior</a>
                            </li>
                            <li>
                                <a href="#" data-filter=".renovation">Renovation</a>
                            </li>
                            <li>
                                <a href="#" data-filter=".architecture">Architecture</a>
                            </li>
                            <li>
                                <a href="#" data-filter=".landscaping">Landscaping</a>
                            </li>
                            <li>
                                <a href="#" data-filter=".gardening">Gardening</a>
                            </li>
                        </ul>
                    </div>
                    <!-- .projects-filter end -->
                </div>
                <!-- .row end -->

                <!-- Projects Item
                ============================================= -->
                <div id="projects-all" class="row">

                    <!-- Project Item #1 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 project-item interior gardening">
                        <div class="project-img">
                            <img class="" src="{{ asset('razen-project/assets/images/projects/small/4.jpg') }}" alt="interior"/>
                            <div class="project-hover">
                                <div class="project-meta">
                                    <h6>Interior</h6>
                                    <h4>
                                        <a href="#">New Office Room</a>
                                    </h4>
                                </div>
                                <div class="project-zoom">
                                    <a class="img-popup" href="{{ asset('razen-project/assets/images/projects/full/4.jpg') }}" title="New Office Room"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <!-- .project-hover end -->
                        </div>
                        <!-- .project-img end -->

                    </div>
                    <!-- .project-item end -->

                    <!-- Project Item #2 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 project-item renovation landscaping">
                        <div class="project-img">
                            <img class="" src="{{ asset('razen-project/assets/images/projects/small/1.jpg') }}" alt="interior"/>
                            <div class="project-hover">
                                <div class="project-meta">
                                    <h6>Interior</h6>
                                    <h4>
                                        <a href="#">New Office Room</a>
                                    </h4>
                                </div>
                                <div class="project-zoom">
                                    <a class="img-popup" href="{{ asset('razen-project/assets/images/projects/full/1.jpg') }}" title="New Office Room"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <!-- .project-hover end -->
                        </div>
                        <!-- .project-img end -->

                    </div>
                    <!-- .project-item end -->

                    <!-- Project Item #3 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 project-item interior landscaping">
                        <div class="project-img">
                            <img class="" src="{{ asset('razen-project/assets/images/projects/small/2.jpg') }}" alt="interior"/>
                            <div class="project-hover">
                                <div class="project-meta">
                                    <h6>Interior</h6>
                                    <h4>
                                        <a href="#">New Office Room</a>
                                    </h4>
                                </div>
                                <div class="project-zoom">
                                    <a class="img-popup" href="{{ asset('razen-project/assets/images/projects/full/2.jpg') }}" title="New Office Room"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <!-- .project-hover end -->
                        </div>
                        <!-- .project-img end -->

                    </div>
                    <!-- .project-item end -->

                    <!-- Project Item #4 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 project-item architecture">
                        <div class="project-img">
                            <img class="" src="{{ asset('razen-project/assets/images/projects/small/3.jpg') }}" alt="interior"/>
                            <div class="project-hover">
                                <div class="project-meta">
                                    <h6>Interior</h6>
                                    <h4>
                                        <a href="#">New Office Room</a>
                                    </h4>
                                </div>
                                <div class="project-zoom">
                                    <a class="img-popup" href="{{ asset('razen-project/assets/images/projects/full/3.jpg') }}" title="New Office Room"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <!-- .project-hover end -->
                        </div>
                        <!-- .project-img end -->

                    </div>
                    <!-- .project-item end -->

                    <!-- Project Item #5 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 project-item interior">
                        <div class="project-img">
                            <img class="" src="{{ asset('razen-project/assets/images/projects/small/5.jpg') }}" alt="interior"/>
                            <div class="project-hover">
                                <div class="project-meta">
                                    <h6>Interior</h6>
                                    <h4>
                                        <a href="#">New Office Room</a>
                                    </h4>
                                </div>
                                <div class="project-zoom">
                                    <a class="img-popup" href="{{ asset('razen-project/assets/images/projects/full/5.jpg') }}" title="New Office Room"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <!-- .project-hover end -->
                        </div>
                        <!-- .project-img end -->

                    </div>
                    <!-- .project-item end -->

                    <!-- Project Item #6 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 project-item interior">
                        <div class="project-img">
                            <img class="" src="{{ asset('razen-project/assets/images/projects/small/6.jpg') }}" alt="interior"/>
                            <div class="project-hover">
                                <div class="project-meta">
                                    <h6>Interior</h6>
                                    <h4>
                                        <a href="#">New Office Room</a>
                                    </h4>
                                </div>
                                <div class="project-zoom">
                                    <a class="img-popup" href="{{ asset('razen-project/assets/images/projects/full/6.jpg') }}" title="New Office Room"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <!-- .project-hover end -->
                        </div>
                        <!-- .project-img end -->

                    </div>
                    <!-- .project-item end -->

                    <!-- Project Item #7 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 project-item interior">
                        <div class="project-img">
                            <img class="" src="{{ asset('razen-project/assets/images/projects/small/7.jpg') }}" alt="interior"/>
                            <div class="project-hover">
                                <div class="project-meta">
                                    <h6>Interior</h6>
                                    <h4>
                                        <a href="#">New Office Room</a>
                                    </h4>
                                </div>
                                <div class="project-zoom">
                                    <a class="img-popup" href="{{ asset('razen-project/assets/images/projects/full/7.jpg') }}" title="New Office Room"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <!-- .project-hover end -->
                        </div>
                        <!-- .project-img end -->

                    </div>
                    <!-- .project-item end -->

                    <!-- Project Item #8 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 project-item architecture">
                        <div class="project-img">
                            <img class="" src="{{ asset('razen-project/assets/images/projects/small/8.jpg') }}" alt="interior"/>
                            <div class="project-hover">
                                <div class="project-meta">
                                    <h6>Interior</h6>
                                    <h4>
                                        <a href="#">New Office Room</a>
                                    </h4>
                                </div>
                                <div class="project-zoom">
                                    <a class="img-popup" href="{{ asset('razen-project/assets/images/projects/full/8.jpg') }}" title="New Office Room"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <!-- .project-hover end -->
                        </div>
                        <!-- .project-img end -->

                    </div>
                    <!-- .project-item end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section> --}}

        <!-- Shortcode #5
        ============================================= -->
        <section id="shortcode-5" class="shortcode-5 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="heading heading-2 text-center">
                            <div class="heading-bg">
                                <p class="mb-0">all about me</p>
                                <h2>my stroy</h2>
                            </div>
                            <p class="mb-0">Razen Project is a leading developer of A-grade commercial, industrial and residential projects in USA. Since its foundation the company has doubled its turnover year on year, with its staff numbers swelling accordingly.</p>
                        </div>
                        <!-- .heading end -->
                    </div>
                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-6">
                        <div class="panel-group accordion" id="accordion02" role="tablist" aria-multiselectable="true">

                            <!-- Panel 01 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse02-1" aria-expanded="true" aria-controls="collapse02-1"> About Razen Project </a>
                                        <span class="icon"></span>
                                    </h4>
                                </div>
                                <div id="collapse02-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        Since its foundation the company has doubled its turnover year on year, with its staff numbers swelling accordingly.Today Razen Project has over 4,000 professionals.Razen Project has a team of specialists capable of maximizing the result.
                                    </div>
                                </div>
                            </div>

                            <!-- Panel 02 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse02-2" aria-expanded="false" aria-controls="collapse02-2"> Our Mission </a>
                                    </h4>
                                </div>
                                <div id="collapse02-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        We do only what we are great on. If we tackle a project you can be 100% sure that it will be delivered right on time, within the set budget limits and at the top level. We get all our liabilities insured, including third-party liabilities, thus indemnifying our clients against all risks.
                                    </div>
                                </div>
                            </div>

                            <!-- Panel 03 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse02-3" aria-expanded="false" aria-controls="collapse02-3"> Our Goals </a>
                                    </h4>
                                </div>
                                <div id="collapse02-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        Razen Project is a leading developer of A-grade commercial,its foundation the company has doubled its turnover year on year industrial and residential projects in USA. Since its foundation the company has doubled its turnover year on year, with its staff numbers swelling accordingly.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .Accordion-->
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3 hidden-xs">
                        <div class="feature">
                            <img class="img-responsive" src="{{ asset('razen-project/assets/images/features/2.jpg') }}" alt="feature">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="feature">
                            <h4 class="text-uppercase">Reliability</h4>
                            <p>Razen Project has a cutting edge quality management system which ensures high quality standards at all sites.</p>
                        </div>
                        <div class="feature">
                            <h4 class="text-uppercase">Expertise</h4>
                            <p>We have a team of specialists capable of maximizing the result and delivering the projects of any complexity.</p>
                        </div>
                        <div class="feature last">
                            <h4 class="text-uppercase">Quality</h4>
                            <p>The control mechanism allows secure &amp; integrated monitoring of all stages of the works.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call To Action #3
        ============================================= -->
        <section id="cta-3" class="cta cta-3 bg-overlay bg-overlay-theme text-center">
            <div class="bg-section" >
                <img src="{{ asset('razen-project/assets/images/call/2.jpg') }}" alt="Background"/>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <h2>Quality Comes First</h2>
                        <p>Untuk mencapai target sesuai dengan waktu yang ditentukan, perlu beberapa tim kerja yang sinkron dan bersinergi. Sehingga gerak perusahaan menjadi efektif serta efisien, baik dari segi waktu, sumber daya, dan berbagai faktor lainnya. Maka dari saya memilih team yang berpengalaman pada bidangnya.</p>
                        <div class="signiture">
                            <img src="{{ asset('razen-project/assets/images/call/sign.png') }}" alt="signiture"/>
                        </div>
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #cta-3 end -->

        <!-- Shortcode #8
        ============================================= -->
        <section id="shortcode-8" class="shortcode-8 pb-0 pb-60-sm">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 mb-0 text-center">
                            <div class="heading-bg">
                                <h2>Why Razen Project</h2>
                            </div>
                        </div>
                        <!-- .heading end -->
                    </div>
                </div>
                <!-- .row end -->
                <div class="clearfix mb-50">
                </div>
                <div class="row">
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-6 col-md-4 text-right">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 feature">
                                <div class="feature-icon right">
                                    <i class="lnr lnr-calendar-full"></i>
                                </div>
                                <h4 class="text-uppercase">Always Available</h4>
                                <p>Jangan Malu Untuk Berdiskusi, Kami Akan Selalu Ada Untuk Anda.</p>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-12 col-md-12 feature">
                                <div class="feature-icon right">
                                    <i class="lnr lnr-database"></i>
                                </div>
                                <h4 class="text-uppercase">Fair Prices</h4>
                                <p>Jadi, Bangunan Anda Terjamin Aman, Tidak Akan Overbudget, Tentunya Sesuai Harapan</p>
                            </div>
                            <!-- .col-md-12 end -->

                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <div class="col-xs-12 col-sm-4 col-md-4 hidden-xs hidden-sm">
                        <div class="feature-img">
                            <img src="{{ asset('razen-project/assets/images/features/3.png') }}" alt="image"/>
                        </div>
                    </div>
                    <!-- .col-md-4 end -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 feature">
                                <div class="feature-icon">
                                    <i class="lnr lnr-briefcase"></i>
                                </div>
                                <h4 class="text-uppercase">Qualified Agents</h4>
                                <p>Akan Menjadi Jaminan Kualitas Untuk Pembangunan Rumah Anda</p>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-12 col-md-12 feature">
                                <div class="feature-icon">
                                    <i class="lnr lnr-cart"></i>
                                </div>
                                <h4 class="text-uppercase">Best Offers</h4>
                                <p>Transparansi dan Kejelasan bagi Klien & Mitra Usaha</p>
                            </div>
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .col-md-4 end-->
                </div>
            </div>
        </section>

        <!-- Testimonials #1
        ============================================= -->
        <section id="testimonials" class="testimonial testimonial-1 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-3 text-center">
                            <div class="heading-bg">
                                <p class="mb-0">apa yang dikatakan orang ?</p>
                                <h2>testimonial</h2>
                            </div>
                        </div>
                        <!-- .heading end -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div id="testimonial-oc" class="testimonial-carousel">

                            @foreach ($testimonials as $testimonial)
                                <!-- testimonial item #1 -->
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="testimonial-img">
                                            <i class="fa fa-quote-left"></i>
                                            <img src="{{ asset('images/razen-project/foto-testimoni/'.$testimonial->foto) }}" alt="author"/>
                                        </div>
                                        <p>{{$testimonial->testimonial}}</p>
                                    </div>
                                    <div class="testimonial-divider">
                                    </div>
                                    <div class="testimonial-meta">
                                        <strong>{{$testimonial->nama}}</strong>, {{$testimonial->jabatan}}
                                    </div>
                                </div>
                                <!-- .testimonial-item end -->
                            @endforeach

                        </div>
                    </div>
                    <!-- .col-md-12 end -->

                </div>
                <!-- .row end -->

            </div>
            <!-- .container end -->

        </section>
        <!-- #testimonials end -->

        <!-- Shortcode #9
        ============================================= -->
        <section id="clients" class="shortcode-9">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 text-center">
                            <div class="heading-bg">
                                <p class="mb-0">Mereka Selalu Percaya Kami</p>
                                <h2>Klien Kami</h2>
                            </div>
                        </div>
                        <!-- .heading end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    @foreach ($clients as $client)
                        <!-- Client Item -->
                        <div class="col-xs-12 col-sm-4 col-md-2">
                            <div class="brand">
                                <img class="img-responsive center-block" src="{{ asset('images/razen-project/foto-client/'.$client->foto) }}" alt="brand">
                            </div>
                        </div>
                        <!-- .col-md-2 end -->
                    @endforeach
                </div>
                <!-- .row End -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #clients end-->

        <footer id="footer" class="footer-1">
            <!-- Contact Bar
            ============================================= -->
            <div class="container footer-widgtes">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="widgets-contact">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4 widget">
                                    <div class="widget-contact-icon pull-left">
                                        <i class="lnr lnr-map"></i>
                                    </div>
                                    <div class="widget-contact-info">
                                        <p class="text-capitalize text-white">kunjungi kami</p>
                                        <p class="text-capitalize font-heading">{{$profil->alamat}}</p>
                                    </div>
                                </div>
                                <!-- .widget end -->
                                <div class="col-xs-12 col-sm-12 col-md-4 widget">
                                    <div class="widget-contact-icon pull-left">
                                        <i class="lnr lnr-envelope"></i>
                                    </div>
                                    <div class="widget-contact-info">
                                        <p class="text-capitalize text-white">email kami</p>
                                        <p class="text-capitalize font-heading">{{$profil->email}}</p>
                                    </div>
                                </div>
                                <!-- .widget end -->
                                <div class="col-xs-12 col-sm-12 col-md-4 widget">
                                    <div class="widget-contact-icon pull-left">
                                        <i class="lnr lnr-phone"></i>
                                    </div>
                                    <div class="widget-contact-info">
                                        <p class="text-capitalize text-white">telpon kami</p>
                                        <p class="text-capitalize font-heading">{{$profil->no_hp}}</p>
                                    </div>
                                </div>
                                <!-- .widget end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .widget-contact end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->

            <!-- Widget Section
            ============================================= -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 widgets-links">
                        <div class="col-xs-12 col-sm-12 col-md-4 widget-about text-center-xs mb-30-xs">
                            <div class="widget-about-logo pull-left pull-none-xs">
                                <img src="{{ asset('razen-project/assets/images/footer-logo.png') }}" alt="logo"/>
                            </div>
                            <div class="widget-about-info">
                                <h5 class="text-capitalize text-white">Razen Project</h5>
                                <p class="mb-0">Razen Project is a leading of A-grade commercial, industrial and residential projects in USA. Since its foundation the company has doubled its turnover year on year, with its staff numbers swelling accordingly.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 widget-navigation text-center-xs mb-30-xs">
                            <h5 class="text-capitalize text-white">navigation</h5>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <ul class="list-unstyled text-capitalize">
                                        <li>
                                            <a href="#"> about us</a>
                                        </li>
                                        <li>
                                            <a href="#"> careers</a>
                                        </li>
                                        <li>
                                            <a href="#"> pricing plans</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <ul class="list-unstyled text-capitalize">
                                        <li>
                                            <a href="#"> team</a>
                                        </li>
                                        <li>
                                            <a href="#"> projects</a>
                                        </li>
                                        <li>
                                            <a href="#"> FAQs</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-5 widget-services text-center-xs">
                            <h5 class="text-capitalize text-white">services</h5>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <ul class="list-unstyled text-capitalize">
                                        <li>
                                            <a href="#"> design &amp; build</a>
                                        </li>
                                        <li>
                                            <a href="#"> tiling &amp; painting</a>
                                        </li>
                                        <li>
                                            <a href="#"> revonations</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <ul class="list-unstyled text-capitalize">
                                        <li>
                                            <a href="#"> management</a>
                                        </li>
                                        <li>
                                            <a href="#"> wood flooring</a>
                                        </li>
                                        <li>
                                            <a href="#"> work consulting</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <ul class="list-unstyled text-capitalize">
                                        <li>
                                            <a href="#"> wood flooring</a>
                                        </li>
                                        <li>
                                            <a href="#"> green building</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Social bar
            ============================================= -->
            <div class="widget-social">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 mb-30-xs mb-30-sm">
                            <div class="widget-social-info pull-left text-capitalize pull-none-xs mb-15-xs">
                                <p class="mb-0">follow us<br>
                                    on social networks</p>
                            </div>
                            <div class="widget-social-icon pull-right text-right pull-none-xs">
                                <a href="#">
                                    <i class="fa fa-facebook"></i><i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram"></i><i class="fa fa-instagram"></i>
                                </a>
                                <a href="#" >
                                    <i class="fa fa-youtube"></i><i class="fa fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="widget-newsletter-info pull-left text-capitalize pull-none-xs mb-15-xs">
                                <p class="mb-0">subsribe<br>
                                    on our newsletter</p>
                            </div>
                            <div class="widget-newsletter-form pull-right text-right">

                                <!-- Mailchimp Form
                                =============================================-->
                                <form class="mailchimp">
                                    <div class="subscribe-alert">
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type Your Email Account">
                                        <span class="input-group-btn">
                                        <button class="btn text-capitalize" type="button">join</button>
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </form>
                                <!--Mailchimp Form End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyrights
            ============================================= -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 copyrights text-center">
                        <p class="text-capitalize">© 2022 PT Razen Teknologi Indonesia</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Footer Scripts
        ============================================= -->
        <script src="{{ asset('razen-project/assets/js/jquery-2.1.1.min.js') }}"></script>
        <script src="{{ asset('razen-project/assets/js/plugins.js?v=1.0.0') }}"></script>
        <script src="{{ asset('razen-project/assets/js/functions.js?v=1.2.0') }}"></script>
    </body>
</html>
