@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Razen Studio | Social Media Engagement')

@section('content')
    <section class="flat-title-page back-ground-style">
        <div class="container-fluid">
            <div class="row">
                <div class="breadcrumbs text-center link-style-5 text-white">
                    <h2 class="section-title-page">Social Media Engagement</h2>
                    <p class="mb-5">Solusi untuk meningkatkan interaksi pada platform digital</p>
                    <ul class="breadcrumbs-inner list-center display-flex">
                        <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                        <li>
                            <h4 class="section-16px-regular font-weight-500">Social Media Engagement</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="flat-about-2nd">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about-content-left wow fadeInLeft">
                        <div class="about-post">
                            <img src="{{ asset('olux/assets/images/image-box/about-post-mystory.jpg') }}" alt="images">
                            <div class="mark-about-post"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="section-title">
                            <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Pengertian Engagement</h4>
                        </div>
                        <p class="section-17px-regular margin-bottom-25">Engagement adalah segala bentuk interaksi terhadap suatu brand / akun di social media. Interaksi berupa likes, komentar, dan share merupakan bentuk dari engagement di media sosial.</p>
                        <p class="section-17px-regular margin-bottom-25">Memiliki jumlah followers yang banyak memang penting untuk meningkatkan kredibilitas & kepercayaan konsumen, namun, cara terbaik mengukur keberhasilan sebuah akun social media adalah apakah audiens tersebut aktif berinteraksi.</p>
                        <p class="section-17px-regular">Karena bagi sebuah bisnis yang terpenting adalah kualitas bukan hanya sekedar kuantitas, hal tersebutlah yang harus diperhatikan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flat-about-2nd">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="section-title">
                            <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Pentingnya Engagement Rate</h4>
                        </div>
                        <p class="section-17px-regular margin-bottom-25">Engagement rate adalah ukuran tentang berapa banyak orang yang berinteraksi dengan konten pada suatu akun media sosial. Engagement rate juga dapat mengetahui apakah followers dari suatu akun tersebut benar-benar aktif atau sebaliknya.</p>
                        <p class="section-17px-regular margin-bottom-25">Melalui engagement rate, bisnis akan lebih mudah untuk melakukan evaluasi & membuat strategi baru agar konten yang dibuat bisa membuat customer berinteraksi.</p>
                        <div class="button-about margin-top-48 wow fadeInUp" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <a href="{{ route('blog') }}" class="button-footer arrow-btn btn-st btn-style-1">Cara Mengetahui Engagement Rate</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content-left wow fadeInLeft">
                        <div class="about-post">
                            <img src="{{ asset('olux/assets/images/image-box/about-post-mystory.jpg') }}" alt="images">
                            <div class="mark-about-post"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flat-about-2nd">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about-content-left wow fadeInLeft">
                        <div class="about-post">
                            <img src="{{ asset('olux/assets/images/image-box/about-post-mystory.jpg') }}" alt="images">
                            <div class="mark-about-post"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="section-title">
                            <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Cara terbaru meningkatkan Engagement di Social Media</h4>
                        </div>
                        <p class="section-17px-regular margin-bottom-25">Layanan SME (Social Media Engagement) merupakan strategi Growth Hack terkini untuk meningkatkan value akun digital melalui layanan peningkatan interaksi seperti followers, likes, komentar, share, dsb.</p>
                        <p class="section-17px-regular margin-bottom-25">Berikut adalah keuntungan layanan SME:</p>
                        <ul>
                            <li><p>1. Meningkatkan kepercayaan calon konsumen & kredibilitas brand.</p></li>
                            <li><p>2. Meningkatkan jangkauan post dan visibilitas akun pada algoritma pencarian konten.</p></li>
                            <li><p>3. Mendorong peningkatan interaksi organik dengan customer.</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flat-list-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="post-services">
                            <img src="{{ asset('olux/assets/images/image-box/services-post-1.jpg') }}" class="grow-up-hover"
                                alt="images">
                            <div class="icon-item-services">
                                <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                            </div>
                        </div>
                        <div class="content-services">
                            <div class="content-services-inner">
                                <div class="text-center">
                                    <a href="{{ route('social-media-engagement.instagram') }}" class="section-20px-montserrat">Instagram</a>
                                    <p class="text-muted">Mulai dari:</p>
                                    <h2>Rp. 10.000, -</h2>
                                </div>
                                <ul class="mt-5">
                                    <li>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Followers Indonesia</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Likes & Autolikes</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Komentar & Autokomentar</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Views, Save, dll</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="button-readmore">
                                <a href="{{ route('social-media-engagement.instagram') }}" class="read-more">Daftar Harga</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="post-services">
                            <img src="{{ asset('olux/assets/images/image-box/services-post-1.jpg') }}" class="grow-up-hover"
                                alt="images">
                            <div class="icon-item-services">
                                <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                            </div>
                        </div>
                        <div class="content-services">
                            <div class="content-services-inner">
                                <div class="text-center">
                                    <a href="{{ route('social-media-engagement.tik-tok') }}" class="section-20px-montserrat">TikTok</a>
                                    <p class="text-muted">Mulai dari:</p>
                                    <h2>Rp. 10.000, -</h2>
                                </div>
                                <ul class="mt-5">
                                    <li>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Followers</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Views</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Share</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Komentar, dll</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="button-readmore">
                                <a href="{{ route('social-media-engagement.tik-tok') }}" class="read-more">Daftar Harga</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="post-services">
                            <img src="{{ asset('olux/assets/images/image-box/services-post-1.jpg') }}" class="grow-up-hover"
                                alt="images">
                            <div class="icon-item-services">
                                <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                            </div>
                        </div>
                        <div class="content-services">
                            <div class="content-services-inner">
                                <div class="text-center">
                                    <a href="{{ route('social-media-engagement.youtube') }}" class="section-20px-montserrat">Youtube</a>
                                    <p class="text-muted">Mulai dari:</p>
                                    <h2>Rp. 10.000, -</h2>
                                </div>
                                <ul class="mt-5">
                                    <li>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Subscribes</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Views</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Like</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Komentar, dll</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="button-readmore">
                                <a href="{{ route('social-media-engagement.youtube') }}" class="read-more">Daftar Harga</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="post-services">
                            <img src="{{ asset('olux/assets/images/image-box/services-post-1.jpg') }}" class="grow-up-hover"
                                alt="images">
                            <div class="icon-item-services">
                                <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                            </div>
                        </div>
                        <div class="content-services">
                            <div class="content-services-inner">
                                <div class="text-center">
                                    <a href="{{ route('social-media-engagement.twitter') }}" class="section-20px-montserrat">Twitter</a>
                                    <p class="text-muted">Mulai dari:</p>
                                    <h2>Rp. 10.000, -</h2>
                                </div>
                                <ul class="mt-5">
                                    <li>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Followers</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Retweets</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Like/Favourites</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Trending Topics, dll</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="button-readmore">
                                <a href="{{ route('social-media-engagement.twitter') }}" class="read-more">Daftar Harga</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="post-services">
                            <img src="{{ asset('olux/assets/images/image-box/services-post-1.jpg') }}" class="grow-up-hover"
                                alt="images">
                            <div class="icon-item-services">
                                <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                            </div>
                        </div>
                        <div class="content-services">
                            <div class="content-services-inner">
                                <div class="text-center">
                                    <a href="{{ route('social-media-engagement.facebook') }}" class="section-20px-montserrat">Facebook</a>
                                    <p class="text-muted">Mulai dari:</p>
                                    <h2>Rp. 10.000, -</h2>
                                </div>
                                <ul class="mt-5">
                                    <li>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Fanpage Followers</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Fanpage Likes</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Personal Post Likes</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Views, dll</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="button-readmore">
                                <a href="{{ route('social-media-engagement.facebook') }}" class="read-more">Daftar Harga</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="post-services">
                            <img src="{{ asset('olux/assets/images/image-box/services-post-1.jpg') }}" class="grow-up-hover"
                                alt="images">
                            <div class="icon-item-services">
                                <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                            </div>
                        </div>
                        <div class="content-services">
                            <div class="content-services-inner">
                                <div class="text-center">
                                    <a href="{{ route('social-media-engagement.market-place') }}" class="section-20px-montserrat">Market Place</a>
                                    <p class="text-muted">Mulai dari:</p>
                                    <h2>Rp. 10.000, -</h2>
                                </div>
                                <ul class="mt-5">
                                    <li>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Followers</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Product Review</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Product Wishlist</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Product Discuss</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="button-readmore">
                                <a href="{{ route('social-media-engagement.market-place') }}" class="read-more">Daftar Harga</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="post-services">
                            <img src="{{ asset('olux/assets/images/image-box/services-post-1.jpg') }}" class="grow-up-hover"
                                alt="images">
                            <div class="icon-item-services">
                                <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                            </div>
                        </div>
                        <div class="content-services">
                            <div class="content-services-inner">
                                <div class="text-center">
                                    <a href="{{ route('social-media-engagement.google-my-business') }}" class="section-20px-montserrat">Google My Business</a>
                                    <p class="text-muted">Mulai dari:</p>
                                    <h2>Rp. 10.000, -</h2>
                                </div>
                                <ul class="mt-5">
                                    <li>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Maps/Business Review</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Backlink / Share</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="button-readmore">
                                <a href="{{ route('social-media-engagement.google-my-business') }}" class="read-more">Daftar Harga</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="post-services">
                            <img src="{{ asset('olux/assets/images/image-box/services-post-1.jpg') }}" class="grow-up-hover"
                                alt="images">
                            <div class="icon-item-services">
                                <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                            </div>
                        </div>
                        <div class="content-services">
                            <div class="content-services-inner">
                                <div class="text-center">
                                    <a href="{{ route('social-media-engagement.playstore') }}" class="section-20px-montserrat">Playstore / Appstore</a>
                                    <p class="text-muted">Mulai dari:</p>
                                    <h2>Rp. 10.000, -</h2>
                                </div>
                                <ul class="mt-5">
                                    <li>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Review Aplikasi Playstore</p>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                            </svg> <p class="text-muted">Review Aplikasi Appstore</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="button-readmore">
                                <a href="{{ route('social-media-engagement.playstore') }}" class="read-more">Daftar Harga</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flat-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title wow fadeInDown">
                        <h2 class="section-45px-montserrat margin-top-15">Keunggulan Layanan SME</h2>
                        <p class="text-muted">Mulai dari peningkatan trust hingga meningkatkan ranking didalam algoritma konten untuk meningkatkan visibilitas secara organik.</p>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                        style="height:60px"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-box">
                            <div class="icon-counter">
                                <span class="icon-guarantee1"></span>
                            </div>
                        </div>
                        <h3 class="section-20px-montserrat font-weight-600 line-height-35">Meningkatkan Trust & Visibilitas Akun</h3>
                        <p>Tambahan interaksi yang diberikan akan meningkatkan kredibilitas dan jangkauan konten secara organik.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-box">
                            <div class="icon-counter">
                                <span class="icon-guarantee1"></span>
                            </div>
                        </div>
                        <h3 class="section-20px-montserrat font-weight-600 line-height-35">Cara Aman & Mudah Tambah Engagement</h3>
                        <p>Diproses dengan cara resmi yang legal & aman. Hanya membutuhkan URL/username saja (tanpa password).</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-box">
                            <div class="icon-counter">
                                <span class="icon-guarantee1"></span>
                            </div>
                        </div>
                        <h3 class="section-20px-montserrat font-weight-600 line-height-35">Quality #1 For Business</h3>
                        <p>Layanan yang terjamin kualitasnya, karena kami mengembangkan teknologi dan akun sendiri yang menyerupai akun real/asli.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-box">
                            <div class="icon-counter">
                                <span class="icon-guarantee1"></span>
                            </div>
                        </div>
                        <h3 class="section-20px-montserrat font-weight-600 line-height-35">Easy Order</h3>
                        <p>Dengan dukungan platform serba otomatis untuk melakukan order, pembayaran, tracking project, dan support secara mudah.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flat-brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="swiper-container carousel-style-3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand-content">
                                    <img src="{{ asset('olux/assets/images/image-slider/brand-1.png') }}" alt="images">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-content">
                                    <img src="{{ asset('olux/assets/images/image-slider/brand-2.png') }}" alt="images">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-content">
                                    <img src="{{ asset('olux/assets/images/image-slider/brand-3.png') }}" alt="images">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-content">
                                    <img src="{{ asset('olux/assets/images/image-slider/brand-4.png') }}" alt="images">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-content">
                                    <img src="{{ asset('olux/assets/images/image-slider/brand-5.png') }}" alt="images">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-content">
                                    <img src="{{ asset('olux/assets/images/image-slider/brand-6.png') }}" alt="images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flat-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title wow fadeInDown">
                        <p class="text-muted">Official Partners:</p>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                        style="height:60px"></div>
                </div>
                <div class="col-md-12 justify-content-center">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-3 col-4">
                            <div class="mx-3 client-image">
                                <img class="max-w-11rem max-w-md-13rem mx-auto client-default" src="https://gosocial.co.id/assets/img/home/ocbc_partner.png" alt="Partner OCBC NISP">
                                <img class="max-w-11rem max-w-md-13rem mx-auto client-hover" style="display: none;" src="https://gosocial.co.id/assets/img/home/ocbc_partner.png" alt="Partner OCBC">
                            </div>
                        </div>

                        <div class="col-lg-3 col-4">
                            <a class="mx-3 client-image" href="https://www.bhinneka.com/toko-gosocial-indonesia" target="_blank">
                                <img class="max-w-11rem max-w-md-13rem mx-auto client-default" src="https://gosocial.co.id/assets/img/home/bhinekka_partner.png" alt="Parnter Bhinneka.com" style="">
                                <img class="max-w-11rem max-w-md-13rem mx-auto client-hover" style="display: none;" src="https://gosocial.co.id/assets/img/home/bhinekka_partner.png" alt="Partner Bhinneka">
                            </a>
                        </div>

                        <div class="col-lg-3 col-4">
                            <div class="mx-3 client-image">
                                <img class="max-w-11rem max-w-md-13rem mx-auto client-default" src="https://gosocial.co.id/assets/img/home/crewdible_partner.png" alt="Partner Crewdible">
                                <img class="max-w-11rem max-w-md-13rem mx-auto client-hover" style="display: none;" src="https://gosocial.co.id/assets/img/home/crewdible_partner.png" alt="Partner Crewdible">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
