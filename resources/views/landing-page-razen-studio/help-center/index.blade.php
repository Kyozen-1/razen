@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Razen Studio | Help Center')

@section('content')
<section class="flat-title-page back-ground-style">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h2 class="section-title-page text-white">Help Center</h2>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">Help Center</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
