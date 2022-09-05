<?php

Route::group(['middleware' => 'auth:razen_studio,razen'], function(){
    Route::get('/razen-studio/admin/dashboard', 'RazenStudio\Admin\DashboardController@index')->name('razen-studio.admin.dashboard.index');
    Route::post('/razen-studio/admin/dashboard/change', 'RazenStudio\Admin\DashboardController@change')->name('razen-studio.admin.dashboard.change');

    //Home
    Route::get('/razen-studio/admin/home/atur', 'RazenStudio\Admin\HomeAturController@index')->name('razen-studio.admin.home.atur.index');
    //Home - Section 1 Start
    Route::post('/razen-studio/admin/home/atur/section-1/store', 'RazenStudio\Admin\HomeAturController@section_1_store')->name('razen-studio.admin.home.atur.section-1.store');
    Route::get('/razen-studio/admin/home/atur/section-1/lihat-gambar-section1', 'RazenStudio\Admin\HomeAturController@lihat_gambar_section1')->name('razen-studio.admin.home.atur.section-1.lihat-gambar-section1');
    Route::post('/razen-studio/admin/home/atur/section-1/store/gambar-section1', 'RazenStudio\Admin\HomeAturController@section_1_store_gambar_section1')->name('razen-studio.admin.home.atur.section-1.store.gambar-section1');
    Route::post('/razen-studio/admin/home/atur/section-1/hapur/gambar-section1', 'RazenStudio\Admin\HomeAturController@section_1_hapus_gambar_section1')->name('razen-studio.admin.home.atur.section-1.hapus.gambar-section1');
    //Home - Section 1 End

    //Home - Section 2 Start
    Route::post('/razen-studio/admin/home/atur/section-2/store', 'RazenStudio\Admin\HomeAturController@section_2_store')->name('razen-studio.admin.home.atur.section-2.store');
    Route::post('/razen-studio/admin/home/atur/section-2/store/hapus/satu', 'RazenStudio\Admin\HomeAturController@section_2_hapus_satu')->name('razen-studio.admin.home.atur.section-2.hapus.satu');
    Route::post('/razen-studio/admin/home/atur/section-2/store/tambah', 'RazenStudio\Admin\HomeAturController@section_2_tambah')->name('razen-studio.admin.home.atur.section-2.tambah');
    //Home - Section 2 End

    //Home - Section 3 Start
    Route::post('/razen-studio/admin/home/atur/section-3/store', 'RazenStudio\Admin\HomeAturController@section_3_store')->name('razen-studio.admin.home.atur.section-3.store');
    Route::post('/razen-studio/admin/home/atur/section-3/edit', 'RazenStudio\Admin\HomeAturController@section_3_edit')->name('razen-studio.admin.home.atur.section-3.edit');
    Route::post('/razen-studio/admin/home/atur/section-3/store/hapus/satu', 'RazenStudio\Admin\HomeAturController@section_3_hapus_satu')->name('razen-studio.admin.home.atur.section-3.hapus.satu');
    //Home - Section 3 End

    //Home - Section 4 Start
    Route::post('/razen-studio/admin/home/atur/section-4/store', 'RazenStudio\Admin\HomeAturController@section_4_store')->name('razen-studio.admin.home.atur.section-4.store');
    Route::post('/razen-studio/admin/home/atur/section-4/edit', 'RazenStudio\Admin\HomeAturController@section_4_edit')->name('razen-studio.admin.home.atur.section-4.edit');
    Route::post('/razen-studio/admin/home/atur/section-4/store/hapus/satu', 'RazenStudio\Admin\HomeAturController@section_4_hapus_satu')->name('razen-studio.admin.home.atur.section-4.hapus.satu');
    //Home - Section 4 End

    //Home - Section 5 Start
    Route::post('/razen-studio/admin/home/atur/section-5/store', 'RazenStudio\Admin\HomeAturController@section_5_store')->name('razen-studio.admin.home.atur.section-5.store');
    //Home - Section 5 End

    //Home - Section 6 Start
    Route::post('/razen-studio/admin/home/atur/section-6/store', 'RazenStudio\Admin\HomeAturController@section_6_store')->name('razen-studio.admin.home.atur.section-6.store');
    //Home - Section 6 End

    //Home - Section 7 Start
    Route::post('/razen-studio/admin/home/atur/section-7/store', 'RazenStudio\Admin\HomeAturController@section_7_store')->name('razen-studio.admin.home.atur.section-7.store');
    //Home - Section 7 End

    //Reviewer
    Route::get('/razen-studio/admin/landing-page/reviewer', 'RazenStudio\Admin\LandingPage\ReviewerController@index')->name('razen-studio.admin.landing-page.reviewer.index');
    Route::get('/razen-studio/admin/landing-page/reviewer/detail/{id}', 'RazenStudio\Admin\LandingPage\ReviewerController@show');
    Route::post('/razen-studio/admin/landing-page/reviewer','RazenStudio\Admin\LandingPage\ReviewerController@store')->name('razen-studio.admin.landing-page.reviewer.store');
    Route::get('/razen-studio/admin/landing-page/reviewer/edit/{id}','RazenStudio\Admin\LandingPage\ReviewerController@edit');
    Route::post('/razen-studio/admin/landing-page/reviewer/update','RazenStudio\Admin\LandingPage\ReviewerController@update')->name('razen-studio.admin.landing-page.reviewer.update');
    Route::get('/razen-studio/admin/landing-page/reviewer/destroy/{id}','RazenStudio\Admin\LandingPage\ReviewerController@destroy');

    //Brand
    Route::get('/razen-studio/admin/landing-page/brand', 'RazenStudio\Admin\LandingPage\BrandController@index')->name('razen-studio.admin.landing-page.brand.index');
    Route::get('/razen-studio/admin/landing-page/brand/detail/{id}', 'RazenStudio\Admin\LandingPage\BrandController@show');
    Route::post('/razen-studio/admin/landing-page/brand','RazenStudio\Admin\LandingPage\BrandController@store')->name('razen-studio.admin.landing-page.brand.store');
    Route::get('/razen-studio/admin/landing-page/brand/edit/{id}','RazenStudio\Admin\LandingPage\BrandController@edit');
    Route::post('/razen-studio/admin/landing-page/brand/update','RazenStudio\Admin\LandingPage\BrandController@update')->name('razen-studio.admin.landing-page.brand.update');
    Route::get('/razen-studio/admin/landing-page/brand/destroy/{id}','RazenStudio\Admin\LandingPage\BrandController@destroy');

    //Brand
    Route::get('/razen-studio/admin/landing-page/official-partner', 'RazenStudio\Admin\LandingPage\OfficialPartnerController@index')->name('razen-studio.admin.landing-page.official-partner.index');
    Route::get('/razen-studio/admin/landing-page/official-partner/detail/{id}', 'RazenStudio\Admin\LandingPage\OfficialPartnerController@show');
    Route::post('/razen-studio/admin/landing-page/official-partner','RazenStudio\Admin\LandingPage\OfficialPartnerController@store')->name('razen-studio.admin.landing-page.official-partner.store');
    Route::get('/razen-studio/admin/landing-page/official-partner/edit/{id}','RazenStudio\Admin\LandingPage\OfficialPartnerController@edit');
    Route::post('/razen-studio/admin/landing-page/official-partner/update','RazenStudio\Admin\LandingPage\OfficialPartnerController@update')->name('razen-studio.admin.landing-page.official-partner.update');
    Route::get('/razen-studio/admin/landing-page/official-partner/destroy/{id}','RazenStudio\Admin\LandingPage\OfficialPartnerController@destroy');
});
