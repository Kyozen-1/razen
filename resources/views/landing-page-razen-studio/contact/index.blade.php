@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Razen Studio | Contact')

@section('css')
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/cubeportfolio/css/cubeportfolio.min.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/dzsparallaxer/dzsparallaxer.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/aos/dist/aos.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/pages/global.css?v.0908">
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/theme.min.css">
@endsection

@section('content')
<section class="flat-title-page back-ground-style">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h2 class="section-title-page text-white">Hubungi Kami</h2>
                <p class="mb-5">Jika Anda mempunyai pertanyaan seputar layanan maupun ingin berdiskusi terkait permasalahan digital marketing hingga meminta penawaran Jasa Digital Marketing dari GoSocial.</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">Hubungi Kami</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3 mb-md-0 mb-md-n11">
                <!-- Card -->
                <a class="card text-center h-100 transition-3d-hover" href="#contact-form">
                    <div class="card-body p-lg-5">
                        <figure class="mx-auto mb-4">
                            <img style="height: 7rem; width:auto;" src="https://gosocial.co.id/assets/svg/contact/jam-kerja-perusahaan.svg" alt="SVG">
                        </figure>
                        <h2 class="h4">Office Hours</h2>
                        <p class="text-body mb-0">Senin - Jum'at<br>
                            09:00 - 17:00 WIB<br>
                            <small>(Selain Hari Libur Nasional)</small>
                        </p>
                    </div>
                    <div class="card-foo font-size-2ter font-weight-bold py-3 px-lg-5">
                        Contact Us</i>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-md-4 mb-3 mb-md-0 mb-md-n11">
                <!-- Card -->
                <a class="card text-center h-100 transition-3d-hover livechat_action" href="javascript:void(0)">
                    <div class="card-body p-lg-5">
                        <figure class="mx-auto mb-4">
                            <img style="height: 7rem; width:auto;" src="https://gosocial.co.id/assets/svg/contact/tim-sales.svg" alt="SVG">
                        </figure>
                        <h2 class="h4">Livechat Online</h2>
                        <p class="text-body mb-0">
                            Senin s/d Jum'at<br>
                            <small>09:00 - 21:00 WIB</small><br>
                            Weekends / Hari Libur<br>
                            <small>09:00 - 17:00 WIB</small> <br>
                        </p>
                    </div>
                    <div class="card-footer font-size-2 font-weight-bold py-3 px-lg-5">
                        Livechat Now!</i>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-md-4 mb-md-n11">
                <!-- Card -->
                <a class="card text-center h-100 transition-3d-hover" href="#contact-form">
                    <div class="card-body p-lg-5">
                        <figure class="mx-auto mb-4">
                            <img style="height: 7rem; width:auto;" src="https://gosocial.co.id/assets/svg/contact/email.svg" alt="SVG">
                        </figure>
                        <h2 class="h4">E-Mail</h2>
                        <p class="text-body mb-0">
                            <small>Mengisi form general enquiries = kirim e-mail</small><br><b>hello@gosocial.co.id</b><br>
                            <small>Segera setelah mengisi form / kirim e-mail tim kami akan menghubungi Anda.</small>
                        </p>
                    </div>
                    <div class="card-fo font-size-2oter font-weight-bold py-3 px-lg-5">
                        E-mail Us</i>
                    </div>
                </a>
                <!-- End Card -->
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container space-2">
        <div class="row">
            <div class="col-lg-6 mb-9 mb-lg-0">
                <div class="mb-5">
                    <h2 class="display-4">Get in touch</h2>
                    <p>Kami akan sangat senang berkomunikasi untuk mengetahui dan merencanakan solusi terbaik untuk setiap permasalahan Anda.</p>
                </div>

                <!-- Leaflet -->
                <div class="mapouter min-h-300rem mb-5">
                    <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=PT Razen Teknologi Indonesia&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                </div>
                <!-- <div id="mapExample2" class="min-h-300rem mb-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.72680746486!2d112.74041361476013!3d-7.271896594751136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb3f7d4a064d%3A0x8df51e1f12e73509!2sGoSocial%20-%20Social%20Media%20%26%20Digital%20Marketing%20Agency%20(PT.%20Nusa%20Digital%20Media)!5e0!3m2!1sid!2sid!4v1630132883130!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div> -->
                <!-- End Leaflet -->


                <div class="row">
                    <div class="col-sm-6">

                        <div class="mb-3">
                            <span class="d-block h2 mb-1"><span class="text-primary text-highlight-warning">Konsultasi</span></span>
                            <span class="d-block h4 mt-2">Info Layanan</span>
                            <span class="d-block text-body font-size-2 mb-1">+62 812 3456 6636 <small>(Official WhatsApp)</small></span>
                            <span class="d-block text-body font-size-2"><a href="https://api.whatsapp.com/send?phone=6281234566636&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20konsultasi%20tentang%20digital%20marketing" target="_blank" type="button" class="btn btn-soft-success font-size-2"> Whatsapp Now</a></span>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <span class="d-block h2 mb-1"><span class="text-primary text-highlight-warning">Office</span></span>
                            <span class="d-block h4 mt-2">Surabaya</span>
                            <span class="d-block text-body font-size-2">Bumi Mandiri Tower II Lt.12<br>
                                Jl. Panglima Sudirman<br>
                                Surabaya - 60271</span>
                            <span class="d-block h4 mt-2">Jakarta</span>
                            <span class="d-block text-body font-size-2">Coming Soon</span>
                        </div>

                        <div class="mb-3">
                            <span class="d-block h2 mb-1"><span class="text-primary text-highlight-success">Studio &amp; Learning Center</span></span>
                            <span class="d-block h4 mt-2">Surabaya</span>
                            <span class="d-block text-body font-size-2">Jl. R.A Kartini No.87, DR. Soetomo, Kec. Tegalsari, Surabaya - 60264</span>
                            <span class="d-block h4 mt-2">Malang</span>
                            <span class="d-block text-body font-size-2">Coming Soon</span>
                            <span class="d-block h4 mt-2">Jogja</span>
                            <span class="d-block text-body font-size-2">Coming Soon</span>
                            <span class="d-block h4 mt-2">Jakarta</span>
                            <span class="d-block text-body font-size-2">Coming Soon</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" id="contact-form">
                <div class="ml-lg-5">
                    <!-- Form -->
                    <form id="contact_us_form" class="js-validate card shadow-lg mb-4" action="https://gosocial.co.id/contact" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                        <input type="hidden" name="_token" value="ztlyMzCREdvuhR7AEjDg4JLMpd8Z0VqD4S5ZG5sw">                    <div class="card-header border-0 bg-light text-center py-4 px-4 px-md-6">
                            <h1 class="mb-0">General Enquiries</h1>
                        </div>

                        <div class="card-body p-4 p-md-6">
                            <div class="row">
                                <div class="col-sm-12 mt-3">
                                    <!-- Form Group -->
                                    <label class="input-label font-size-2">Nama*</label>
                                    <div class="js-form-message">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="name" placeholder="Nama" aria-label="First name" required="" data-msg="Mohon masukkan nama lengkap Anda.">
                                        </div>
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-sm-12 mt-3">
                                    <!-- Form Group -->
                                    <label class="input-label font-size-2">Perusahaan / Bisnis<span class="text-muted font-weight-normal ml-1">(optional)</span></label>
                                    <div class="js-form-message">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="company" placeholder="Nama Brand" aria-label="Company" data-msg="Mohon masukkan nama perusahaan.">
                                        </div>
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-sm-12 mt-3">
                                    <!-- Form Group -->
                                    <label class="input-label font-size-2">Email*</label>
                                    <div class="js-form-message">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="email" placeholder="mail@gmail.com" aria-label="Email address" required="" data-msg="Mohon masukkan e-mail yang valid.">
                                        </div>
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-sm-12 mt-3">
                                    <!-- Form Group -->
                                    <label class="input-label font-size-2">No HP / WhatsApp yang bisa dihubungi*</label>
                                    <div class="js-form-message">
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="number" placeholder="(+62)" aria-label="No. HP" required="" data-msg="Mohon masukkan nomor telepon yang dapat dihubungi.">
                                        </div>
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-sm-12 mt-3">
                                    <!-- Form Group -->
                                    <label class="input-label font-size-2">Subject*</label>
                                    <div class="js-form-message input-group">
                                        <select class="form-control" id="subject" name="subject" required="">
                                            <option value="" selected="">Pilih kategeori</option>
                                            <option value="informasi">Request Penawaran / Informasi Layanan</option>
                                            <option value="kendala">Kendala Layanan</option>
                                            <option value="billing">Billing / Pembayaran</option>
                                            <option value="kerjasama">Event, Promosi &amp; Kerjasama</option>
                                            <option value="lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-sm-12 mt-3">
                                    <!-- Form Group -->
                                    <div class="js-form-message form-group">
                                        <label for="message_contact" class="input-label font-size-2">Pesan*</label>
                                        <div class="input-group">
                                            <textarea class="form-control" rows="4" name="message" id="message_contact" placeholder="Halo GoSocial! Kami ingin berdiskusi lebih lanjut tentang ..." aria-label="Halo GoSocial! Kami ingin berdiskusi lebih lanjut tentang ..." required="" data-msg="Mohon tulis isi pesan."></textarea>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-sm-12 mb-3 mb-md-5">
                                    <label class="input-label font-size-2">Attachment (Optional)</label>
                                    <label class="file-attachment-input" for="fileAttachmentInput">
                                        <span id="customFileExample4">Browse your files</span>
                                        <small class="d-block text-muted">Maximum file size 1MB</small>
                                        <input id="fileAttachmentInput" name="file-attachment" type="file" class="js-file-attach file-attachment-input-label" data-hs-file-attach-options="{
                 &quot;textTarget&quot;: &quot;#customFileExample4&quot;
               }">
                                    </label>
                                </div>
                            </div>

                            <div class="text-center" id="spinner_contact" style="display: none;">
                                <div class="spinner-border" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary transition-3d-hover font-size-2" disabled="" id="submit_contact">Submit</button>
                        </div>
                    </form>
                    <!-- End Form -->

                    <div class="text-center">
                        <p class="small font-size-1">We'll get back to you in 1-2 business days.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-primary text-center bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/svg/components/abstract-shapes-5.svg);">
        <div class="container space-2">
            <div class="mb-5">
                <h4 class="h3 text-white font-size-3">Konsultasi gratis dengan tim kami untuk menemukan jawaban permasalahan Anda!</h4>
            </div>
            <a class="btn btn-light transition-3d-hover font-size-2" href="https://api.whatsapp.com/send?phone=6285159974507&amp;text=Halo%20Mba%20Yosa%2C%0D%0ASaya%20ingin%20konsultasi%20layanan&quot;" target="_blank">Jadwalkan Konsultasi!</a>
        </div>
    </div>

    <div class="container space-1">
        <div class="w-lg-75 mt-3 mx-lg-auto">
            <div class="text-center mb-4">
                <span class="divider divider-text">Official Partners:</span>
            </div>

            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8 col-12">
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
                                <img class="max-w-11rem max-w-md-13rem mx-auto client-default" src="https://gosocial.co.id/assets/img/home/crewdible_partner.png" alt="Partner Crewdible" style="">
                                <img class="max-w-11rem max-w-md-13rem mx-auto client-hover" style="display: none;" src="https://gosocial.co.id/assets/img/home/crewdible_partner.png" alt="Partner Crewdible">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://gosocial.co.id/assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/hs-header/dist/hs-header.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/aos/dist/aos.js"></script>
<script src="https://gosocial.co.id/assets/js/theme.min.js"></script>
@endsection
