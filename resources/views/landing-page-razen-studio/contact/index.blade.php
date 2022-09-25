@php
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioContact;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;

    $home = LandingpageRazenstudioHome::first();

    $contact = LandingpageRazenstudioContact::first();
    if ($contact) {
        $contact_section_1 = json_decode($contact->section_1, true);
        $contact_section_2 = json_decode($contact->section_2, true);
        $contact_section_3 = json_decode($contact->section_3, true);
        $contact_section_4 = json_decode($contact->section_4, true);
    } else {
        $contact_section_1 = [];
        $contact_section_2 = [];
        $contact_section_3 = [];
        $contact_section_4 = [];
    }

    $reviews = LandingpageRazenstudioReview::latest()->get();
    $brands= LandingpageRazenstudioBrand::all();
    $partners = LandingpageRazenstudioOfficialPartner::all();
@endphp
@extends('landing-page-razen-studio.layouts.app')
@section('title', $contact_section_1['title'])

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
                <h2 class="section-title-page text-white">{{$contact_section_1['judul']}}</h2>
                <p class="mb-5">{{$contact_section_1['deskripsi']}}</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">{{$contact_section_1['judul']}}</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container">
        <div class="row">
            @foreach ($contact_section_2 as $item)
                <div class="col-md-4 mb-3 mb-md-0 mb-md-n11">
                    <!-- Card -->
                    <a class="card text-center h-100 transition-3d-hover text-dark" href="#contact-form">
                        <div class="card-body p-lg-5">
                            <figure class="mx-auto mb-4">
                                <img style="height: 7rem; width:auto;" src="{{ asset('images/landingpage_razenstudio/contact/'.$item['gambar']) }}" alt="SVG">
                            </figure>
                            <h2 class="h4">{{$item['judul']}}</h2>
                            <p class="text-body mb-0">{!! $item['deskripsi'] !!}
                            </p>
                        </div>
                        <div class="card-footer font-size-2 font-weight-bold py-3 px-lg-5">
                            Contact Us</i>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container space-2">
        <div class="row">
            <div class="col-lg-6 mb-9 mb-lg-0">
                <div class="mb-5">
                    <h2 class="display-4">{{$contact_section_3['judul']}}</h2>
                    <p>{{$contact_section_3['deskripsi']}}</p>
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
                            <span class="d-block text-body font-size-2 mb-1">{{$contact_section_3['konsultasi']['konsultasi']}} <small>(Official WhatsApp)</small></span>
                            <span class="d-block text-body font-size-2"><a href="https://api.whatsapp.com/send?phone={{$contact_section_3['konsultasi']['konsultasi']}}&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20konsultasi%20tentang%20digital%20marketing" target="_blank" type="button" class="btn btn-soft-success font-size-2"> Whatsapp Now</a></span>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <span class="d-block h2 mb-1"><span class="text-primary text-highlight-warning">Office</span></span>
                            @php
                                $offices = $contact_section_3['office'];
                            @endphp
                            @foreach ($offices as $office)
                                <span class="d-block h4 mt-2">{{$office['nama']}}</span>
                                <span class="d-block text-body font-size-2">{{$office['alamat']}}</span>
                            @endforeach
                        </div>

                        <div class="mb-3">
                            @php
                                $studio_learning_centers = $contact_section_3['studio_learning_center'];
                            @endphp
                            <span class="d-block h2 mb-1"><span class="text-primary text-highlight-success">Studio &amp; Learning Center</span></span>
                            @foreach ($studio_learning_centers as $item)
                            <span class="d-block h4 mt-2">{{$item['nama']}}</span>
                            <span class="d-block text-body font-size-2">{{$item['alamat']}}</span>
                            @endforeach
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
                                        <select class="form-control form-control-lg" style="height: 5rem;" id="subject" name="subject" required="">
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

    <div class="bg-danger text-center bg-img-hero">
        <div class="container space-2">
            <div class="mb-5">
                <h4 class="h3 text-white font-size-3">{{$contact_section_4['judul']}}</h4>
            </div>
            <a class="btn btn-light transition-3d-hover font-size-2" href="https://api.whatsapp.com/send?phone={{$contact_section_4['no_wa']}}&amp;text=Halo%20Mba%20Yosa%2C%0D%0ASaya%20ingin%20konsultasi%20layanan&quot;" target="_blank">Jadwalkan Konsultasi!</a>
        </div>
    </div>

    <section class="flat-services">
        <div class="container space-1">
            <div class="w-lg-75 mt-3 mx-lg-auto">
                <div class="text-center mb-4">
                    <span class="divider divider-text h3">Official Partners:</span>
                </div>

                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8 col-12">
                        <div class="row d-flex justify-content-center">
                            @foreach ($partners as $partner)
                                <div class="col-lg-3 col-4">
                                    <div class="mx-3 client-image">
                                        <img class="client-default" src="{{ asset('images/landingpage_razenstudio/official-partner/'.$partner->gambar) }}" alt="Partner OCBC NISP">
                                        <img class="client-hover" style="display: none;" src="{{ asset('images/landingpage_razenstudio/official-partner/'.$partner->gambar) }}" alt="Partner OCBC">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
