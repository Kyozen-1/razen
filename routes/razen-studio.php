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

    Route::prefix('razen-studio')->group(function(){
        Route::prefix('admin')->group(function(){
            Route::prefix('home')->group(function(){
                Route::prefix('data')->group(function(){

                    Route::prefix('biaya')->group(function(){
                        Route::get('/', 'RazenStudio\Admin\Data\BiayaController@index')->name('razen-studio.admin.home.data.biaya.index');
                        Route::get('/create', 'RazenStudio\Admin\Data\BiayaController@create')->name('razen-studio.admin.home.data.biaya.create');
                        Route::get('/detail/{id}', 'RazenStudio\Admin\Data\BiayaController@show')->name('razen-studio.admin.home.data.biaya.detail');
                        Route::post('/','RazenStudio\Admin\Data\BiayaController@store')->name('razen-studio.admin.home.data.biaya.store');
                        Route::get('/edit/{id}','RazenStudio\Admin\Data\BiayaController@edit')->name('razen-studio.admin.home.data.biaya.edit');
                        Route::post('/update/{id}','RazenStudio\Admin\Data\BiayaController@update')->name('razen-studio.admin.home.data.biaya.update');
                        Route::get('/destroy/{id}','RazenStudio\Admin\Data\BiayaController@destroy')->name('razen-studio.admin.home.data.biaya.destory');
                    });

                    Route::prefix('keuntungan-bagi-bisnis')->group(function(){
                        Route::get('/', 'RazenStudio\Admin\Data\KeuntunganBagiBisnisController@index')->name('razen-studio.admin.home.data.keuntungan-bagi-bisnis.index');
                        Route::get('/create', 'RazenStudio\Admin\Data\KeuntunganBagiBisnisController@create')->name('razen-studio.admin.home.data.keuntungan-bagi-bisnis.create');
                        Route::get('/detail/{id}', 'RazenStudio\Admin\Data\KeuntunganBagiBisnisController@show')->name('razen-studio.admin.home.data.keuntungan-bagi-bisnis.detail');
                        Route::post('/','RazenStudio\Admin\Data\KeuntunganBagiBisnisController@store')->name('razen-studio.admin.home.data.keuntungan-bagi-bisnis.store');
                        Route::get('/edit/{id}','RazenStudio\Admin\Data\KeuntunganBagiBisnisController@edit')->name('razen-studio.admin.home.data.keuntungan-bagi-bisnis.edit');
                        Route::post('/update/{id}','RazenStudio\Admin\Data\KeuntunganBagiBisnisController@update')->name('razen-studio.admin.home.data.keuntungan-bagi-bisnis.update');
                        Route::get('/destroy/{id}','RazenStudio\Admin\Data\KeuntunganBagiBisnisController@destroy')->name('razen-studio.admin.home.data.keuntungan-bagi-bisnis.destory');
                    });

                    Route::prefix('portofolio')->group(function(){
                        Route::get('/', 'RazenStudio\Admin\Data\PortofolioController@index')->name('razen-studio.admin.home.data.portofolio.index');
                        Route::get('/create', 'RazenStudio\Admin\Data\PortofolioController@create')->name('razen-studio.admin.home.data.portofolio.create');
                        Route::get('/show/{id}', 'RazenStudio\Admin\Data\PortofolioController@show')->name('razen-studio.admin.home.data.portofolio.show');
                        Route::post('/','RazenStudio\Admin\Data\PortofolioController@store')->name('razen-studio.admin.home.data.portofolio.store');
                        Route::get('/edit/{id}','RazenStudio\Admin\Data\PortofolioController@edit')->name('razen-studio.admin.home.data.portofolio.edit');
                        Route::post('/update','RazenStudio\Admin\Data\PortofolioController@update')->name('razen-studio.admin.home.data.portofolio.update');
                        Route::get('/destroy/{id}','RazenStudio\Admin\Data\PortofolioController@destroy')->name('razen-studio.admin.home.data.portofolio.destroy');
                    });

                    Route::prefix('testimoni')->group(function(){
                        Route::get('/', 'RazenStudio\Admin\Data\TestimoniController@index')->name('razen-studio.admin.home.data.testimoni.index');
                        Route::get('/create', 'RazenStudio\Admin\Data\TestimoniController@create')->name('razen-studio.admin.home.data.testimoni.create');
                        Route::get('/show/{id}', 'RazenStudio\Admin\Data\TestimoniController@show')->name('razen-studio.admin.home.data.testimoni.show');
                        Route::post('/','RazenStudio\Admin\Data\TestimoniController@store')->name('razen-studio.admin.home.data.testimoni.store');
                        Route::get('/edit/{id}','RazenStudio\Admin\Data\TestimoniController@edit')->name('razen-studio.admin.home.data.testimoni.edit');
                        Route::post('/update','RazenStudio\Admin\Data\TestimoniController@update')->name('razen-studio.admin.home.data.testimoni.update');
                        Route::get('/destroy/{id}','RazenStudio\Admin\Data\TestimoniController@destroy')->name('razen-studio.admin.home.data.testimoni.destroy');
                    });
                });
            });
        });
    });

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

    //Footer
    Route::get('/razen-studio/admin/landing-page/footer', 'RazenStudio\Admin\LandingPage\FooterController@index')->name('razen-studio.admin.landing-page.footer.index');
    Route::post('/razen-studio/admin/landing-page/footer/deskripsi', 'RazenStudio\Admin\LandingPage\FooterController@deskripsi')->name('razen-studio.admin.landing-page.footer.deskripsi');

    //Footer - Solution Start
    Route::post('/razen-studio/admin/landing-page/footer/solution/store', 'RazenStudio\Admin\LandingPage\FooterController@footer_solution_store')->name('razen-studio.admin.landing-page.footer.solution.store');
    Route::post('/razen-studio/admin/landing-page/footer/solution/store/hapus/satu', 'RazenStudio\Admin\LandingPage\FooterController@footer_solution_hapus_satu')->name('razen-studio.admin.landing-page.footer.solution.hapus.satu');
    Route::post('/razen-studio/admin/landing-page/footer/solution/store/tambah', 'RazenStudio\Admin\LandingPage\FooterController@footer_solution_tambah')->name('razen-studio.admin.landing-page.footer.solution.tambah');
    //Footer - Solution End

    //Footer - Company Start
    Route::post('/razen-studio/admin/landing-page/footer/company/store', 'RazenStudio\Admin\LandingPage\FooterController@footer_company_store')->name('razen-studio.admin.landing-page.footer.company.store');
    Route::post('/razen-studio/admin/landing-page/footer/company/store/hapus/satu', 'RazenStudio\Admin\LandingPage\FooterController@footer_company_hapus_satu')->name('razen-studio.admin.landing-page.footer.company.hapus.satu');
    Route::post('/razen-studio/admin/landing-page/footer/company/store/tambah', 'RazenStudio\Admin\LandingPage\FooterController@footer_company_tambah')->name('razen-studio.admin.landing-page.footer.company.tambah');
    //Footer - Company End

    //Footer - Get In Touch Start
    Route::post('/razen-studio/admin/landing-page/footer/get-in-touch/store', 'RazenStudio\Admin\LandingPage\FooterController@footer_get_in_touch_store')->name('razen-studio.admin.landing-page.footer.get-in-touch.store');
    Route::post('/razen-studio/admin/landing-page/footer/get-in-touch/store/hapus/satu', 'RazenStudio\Admin\LandingPage\FooterController@footer_get_in_touch_hapus_satu')->name('razen-studio.admin.landing-page.footer.get-in-touch.hapus.satu');
    Route::post('/razen-studio/admin/landing-page/footer/get-in-touch/store/tambah', 'RazenStudio\Admin\LandingPage\FooterController@footer_get_in_touch_tambah')->name('razen-studio.admin.landing-page.footer.get-in-touch.tambah');
    //Footer - Get In Touch End

    //Social Media Engagement
    Route::get('/razen-studio/admin/social-media-engagement/atur', 'RazenStudio\Admin\SocialMediaEngagementAturController@index')->name('razen-studio.admin.social-media-engagement.atur.index');

    //Social Media Engagement - Section 1 Start
    Route::post('/razen-studio/admin/social-media-engagement/atur/section-1/store', 'RazenStudio\Admin\SocialMediaEngagementAturController@section_1_store')->name('razen-studio.admin.social-media-engagement.atur.section-1.store');
    //Social Media Engagement - Section 1 End

    //Social Media Engagement - Section 2 Start
    Route::post('/razen-studio/admin/social-media-engagement/atur/section-2/store', 'RazenStudio\Admin\SocialMediaEngagementAturController@section_2_store')->name('razen-studio.admin.social-media-engagement.atur.section-2.store');
    //Social Media Engagement - Section 2 End

    //Social Media Engagement - Section 3 Start
    Route::post('/razen-studio/admin/social-media-engagement/atur/section-3/store', 'RazenStudio\Admin\SocialMediaEngagementAturController@section_3_store')->name('razen-studio.admin.social-media-engagement.atur.section-3.store');
    //Social Media Engagement - Section 3 End

    //Social Media Engagement - Section 4 Start
    Route::post('/razen-studio/admin/social-media-engagement/atur/section-4/store', 'RazenStudio\Admin\SocialMediaEngagementAturController@section_4_store')->name('razen-studio.admin.social-media-engagement.atur.section-4.store');
    //Social Media Engagement - Section 4 End

    //Social Media Engagement - Section 5 Start
    Route::post('/razen-studio/admin/social-media-engagement/atur/section-5/store', 'RazenStudio\Admin\SocialMediaEngagementAturController@section_5_store')->name('razen-studio.admin.social-media-engagement.atur.section-5.store');
    Route::post('/razen-studio/admin/social-media-engagement/atur/section-5/store/hapus/satu', 'RazenStudio\Admin\SocialMediaEngagementAturController@section_5_hapus_satu')->name('razen-studio.admin.social-media-engagement.atur.section-5.hapus.satu');
    //Social Media Engagement - Section 5 End

    //Home - Section 6 Start
    Route::post('/razen-studio/admin/social-media-engagement/atur/section-6/store', 'RazenStudio\Admin\SocialMediaEngagementAturController@section_6_store')->name('razen-studio.admin.social-media-engagement.atur.section-6.store');
    Route::post('/razen-studio/admin/social-media-engagement/atur/section-6/edit', 'RazenStudio\Admin\SocialMediaEngagementAturController@section_6_edit')->name('razen-studio.admin.social-media-engagement.atur.section-6.edit');
    Route::post('/razen-studio/admin/social-media-engagement/atur/section-6/store/hapus/satu', 'RazenStudio\Admin\SocialMediaEngagementAturController@section_6_hapus_satu')->name('razen-studio.admin.social-media-engagement.atur.section-6.hapus.satu');
    //Home - Section 6 End

    //Social Media Engagement - Instagram
    Route::get('/razen-studio/admin/social-media-engagement/instagram', 'RazenStudio\Admin\SocialMediaEngagement\InstagramController@index')->name('razen-studio.admin.social-media-engagement.instagram.index');

    //Social Media Engagement - Instagram - Section 1 Start
    Route::post('/razen-studio/admin/social-media-engagement/instagram/section-1/store', 'RazenStudio\Admin\SocialMediaEngagement\InstagramController@section_1_store')->name('razen-studio.admin.social-media-engagement.instagram.section-1.store');
    //Social Media Engagement - Instagram - Section 1 End

    //Social Media Engagement - Instagram - Section 2 Start
    Route::post('/razen-studio/admin/social-media-engagement/instagram/section-2/store', 'RazenStudio\Admin\SocialMediaEngagement\InstagramController@section_2_store')->name('razen-studio.admin.social-media-engagement.instagram.section-2.store');
    //Social Media Engagement - Instagram - Section 2 End

    //Social Media Engagement - Instagram - Section 3 Start
    Route::post('/razen-studio/admin/social-media-engagement/instagram/section-3/store', 'RazenStudio\Admin\SocialMediaEngagement\InstagramController@section_3_store')->name('razen-studio.admin.social-media-engagement.instagram.section-3.store');
    //Social Media Engagement - Instagram - Section 3 End

    //Social Media Engagement - Instagram - Section 4 Start
    Route::post('/razen-studio/admin/social-media-engagement/instagram/section-4/store', 'RazenStudio\Admin\SocialMediaEngagement\InstagramController@section_4_store')->name('razen-studio.admin.social-media-engagement.instagram.section-4.store');
    //Social Media Engagement - Instagram - Section 4 End

    //Social Media Engagement - Instagram - Section 5 Start
    Route::post('/razen-studio/admin/social-media-engagement/instagram/section-5/store', 'RazenStudio\Admin\SocialMediaEngagement\InstagramController@section_5_store')->name('razen-studio.admin.social-media-engagement.instagram.section-5.store');
    //Social Media Engagement - Instagram - Section 5 End

    //Social Media Engagement - Instagram - Section 6 Start
    Route::post('/razen-studio/admin/social-media-engagement/instagram/section-6/store', 'RazenStudio\Admin\SocialMediaEngagement\InstagramController@section_6_store')->name('razen-studio.admin.social-media-engagement.instagram.section-6.store');
    Route::post('/razen-studio/admin/social-media-engagement/instagram/section-6/edit', 'RazenStudio\Admin\SocialMediaEngagement\InstagramController@section_6_edit')->name('razen-studio.admin.social-media-engagement.instagram.section-6.edit');
    Route::post('/razen-studio/admin/social-media-engagement/instagram/section-6/store/hapus/satu', 'RazenStudio\Admin\SocialMediaEngagement\InstagramController@section_6_hapus_satu')->name('razen-studio.admin.social-media-engagement.instagram.section-6.hapus.satu');
    //Social Media Engagement - Instagram - Section 6 End

    //Social Media Engagement - Instagram - Section 7 Start
    Route::post('/razen-studio/admin/social-media-engagement/instagram/section-7/store', 'RazenStudio\Admin\SocialMediaEngagement\InstagramController@section_7_store')->name('razen-studio.admin.social-media-engagement.instagram.section-7.store');
    //Social Media Engagement - Instagram - Section 7 End

    //Social Media Engagement - Instagram - Section 8 Start
    Route::post('/razen-studio/admin/social-media-engagement/instagram/section-8/store', 'RazenStudio\Admin\SocialMediaEngagement\InstagramController@section_8_store')->name('razen-studio.admin.social-media-engagement.instagram.section-8.store');
    //Social Media Engagement - Instagram - Section 8 End

    //Social Media Engagement - TikTok
    Route::get('/razen-studio/admin/social-media-engagement/tik-tok', 'RazenStudio\Admin\SocialMediaEngagement\TikTokController@index')->name('razen-studio.admin.social-media-engagement.tik-tok.index');

    //Social Media Engagement - TikTok - Section 1 Start
    Route::post('/razen-studio/admin/social-media-engagement/tik-tok/section-1/store', 'RazenStudio\Admin\SocialMediaEngagement\TikTokController@section_1_store')->name('razen-studio.admin.social-media-engagement.tik-tok.section-1.store');
    //Social Media Engagement - TikTok - Section 1 End

    //Social Media Engagement - TikTok - Section 2 Start
    Route::post('/razen-studio/admin/social-media-engagement/tik-tok/section-2/store', 'RazenStudio\Admin\SocialMediaEngagement\TikTokController@section_2_store')->name('razen-studio.admin.social-media-engagement.tik-tok.section-2.store');
    //Social Media Engagement - TikTok - Section 2 End

    //Social Media Engagement - TikTok - Section 3 Start
    Route::post('/razen-studio/admin/social-media-engagement/tik-tok/section-3/store', 'RazenStudio\Admin\SocialMediaEngagement\TikTokController@section_3_store')->name('razen-studio.admin.social-media-engagement.tik-tok.section-3.store');
    //Social Media Engagement - TikTok - Section 3 End

    //Social Media Engagement - TikTok - Section 4 Start
    Route::post('/razen-studio/admin/social-media-engagement/tik-tok/section-4/store', 'RazenStudio\Admin\SocialMediaEngagement\TikTokController@section_4_store')->name('razen-studio.admin.social-media-engagement.tik-tok.section-4.store');
    //Social Media Engagement - TikTok - Section 4 End

    //Social Media Engagement - TikTok - Section 5 Start
    Route::post('/razen-studio/admin/social-media-engagement/tik-tok/section-5/store', 'RazenStudio\Admin\SocialMediaEngagement\TikTokController@section_5_store')->name('razen-studio.admin.social-media-engagement.tik-tok.section-5.store');
    //Social Media Engagement - TikTok - Section 5 End

    //Social Media Engagement - TikTok - Section 6 Start
    Route::post('/razen-studio/admin/social-media-engagement/tik-tok/section-6/store', 'RazenStudio\Admin\SocialMediaEngagement\TikTokController@section_6_store')->name('razen-studio.admin.social-media-engagement.tik-tok.section-6.store');
    Route::post('/razen-studio/admin/social-media-engagement/tik-tok/section-6/edit', 'RazenStudio\Admin\SocialMediaEngagement\TikTokController@section_6_edit')->name('razen-studio.admin.social-media-engagement.tik-tok.section-6.edit');
    Route::post('/razen-studio/admin/social-media-engagement/tik-tok/section-6/store/hapus/satu', 'RazenStudio\Admin\SocialMediaEngagement\TikTokController@section_6_hapus_satu')->name('razen-studio.admin.social-media-engagement.tik-tok.section-6.hapus.satu');
    //Social Media Engagement - TikTok - Section 6 End

    //Social Media Engagement - TikTok - Section 7 Start
    Route::post('/razen-studio/admin/social-media-engagement/tik-tok/section-7/store', 'RazenStudio\Admin\SocialMediaEngagement\TikTokController@section_7_store')->name('razen-studio.admin.social-media-engagement.tik-tok.section-7.store');
    //Social Media Engagement - TikTok - Section 7 End

    //Social Media Engagement - TikTok - Section 8 Start
    Route::post('/razen-studio/admin/social-media-engagement/tik-tok/section-8/store', 'RazenStudio\Admin\SocialMediaEngagement\TikTokController@section_8_store')->name('razen-studio.admin.social-media-engagement.tik-tok.section-8.store');
    //Social Media Engagement - TikTok - Section 8 End

    //Social Media Engagement - Youtube
    Route::get('/razen-studio/admin/social-media-engagement/youtube', 'RazenStudio\Admin\SocialMediaEngagement\YoutubeController@index')->name('razen-studio.admin.social-media-engagement.youtube.index');

    //Social Media Engagement - Youtube - Section 1 Start
    Route::post('/razen-studio/admin/social-media-engagement/youtube/section-1/store', 'RazenStudio\Admin\SocialMediaEngagement\YoutubeController@section_1_store')->name('razen-studio.admin.social-media-engagement.youtube.section-1.store');
    //Social Media Engagement - Youtube - Section 1 End

    //Social Media Engagement - Youtube - Section 2 Start
    Route::post('/razen-studio/admin/social-media-engagement/youtube/section-2/store', 'RazenStudio\Admin\SocialMediaEngagement\YoutubeController@section_2_store')->name('razen-studio.admin.social-media-engagement.youtube.section-2.store');
    //Social Media Engagement - Youtube - Section 2 End

    //Social Media Engagement - Youtube - Section 3 Start
    Route::post('/razen-studio/admin/social-media-engagement/youtube/section-3/store', 'RazenStudio\Admin\SocialMediaEngagement\YoutubeController@section_3_store')->name('razen-studio.admin.social-media-engagement.youtube.section-3.store');
    //Social Media Engagement - Youtube - Section 3 End

    //Social Media Engagement - Youtube - Section 4 Start
    Route::post('/razen-studio/admin/social-media-engagement/youtube/section-4/store', 'RazenStudio\Admin\SocialMediaEngagement\YoutubeController@section_4_store')->name('razen-studio.admin.social-media-engagement.youtube.section-4.store');
    //Social Media Engagement - Youtube - Section 4 End

    //Social Media Engagement - Youtube - Section 5 Start
    Route::post('/razen-studio/admin/social-media-engagement/youtube/section-5/store', 'RazenStudio\Admin\SocialMediaEngagement\YoutubeController@section_5_store')->name('razen-studio.admin.social-media-engagement.youtube.section-5.store');
    //Social Media Engagement - Youtube - Section 5 End

    //Social Media Engagement - Youtube - Section 6 Start
    Route::post('/razen-studio/admin/social-media-engagement/youtube/section-6/store', 'RazenStudio\Admin\SocialMediaEngagement\YoutubeController@section_6_store')->name('razen-studio.admin.social-media-engagement.youtube.section-6.store');
    Route::post('/razen-studio/admin/social-media-engagement/youtube/section-6/edit', 'RazenStudio\Admin\SocialMediaEngagement\YoutubeController@section_6_edit')->name('razen-studio.admin.social-media-engagement.youtube.section-6.edit');
    Route::post('/razen-studio/admin/social-media-engagement/youtube/section-6/store/hapus/satu', 'RazenStudio\Admin\SocialMediaEngagement\YoutubeController@section_6_hapus_satu')->name('razen-studio.admin.social-media-engagement.youtube.section-6.hapus.satu');
    //Social Media Engagement - Youtube - Section 6 End

    //Social Media Engagement - Youtube - Section 7 Start
    Route::post('/razen-studio/admin/social-media-engagement/youtube/section-7/store', 'RazenStudio\Admin\SocialMediaEngagement\YoutubeController@section_7_store')->name('razen-studio.admin.social-media-engagement.youtube.section-7.store');
    //Social Media Engagement - Youtube - Section 7 End

    //Social Media Engagement - Youtube - Section 8 Start
    Route::post('/razen-studio/admin/social-media-engagement/youtube/section-8/store', 'RazenStudio\Admin\SocialMediaEngagement\YoutubeController@section_8_store')->name('razen-studio.admin.social-media-engagement.youtube.section-8.store');
    //Social Media Engagement - Youtube - Section 8 End

    //Social Media Engagement - Twitter
    Route::get('/razen-studio/admin/social-media-engagement/twitter', 'RazenStudio\Admin\SocialMediaEngagement\TwitterController@index')->name('razen-studio.admin.social-media-engagement.twitter.index');

    //Social Media Engagement - Twitter - Section 1 Start
    Route::post('/razen-studio/admin/social-media-engagement/twitter/section-1/store', 'RazenStudio\Admin\SocialMediaEngagement\TwitterController@section_1_store')->name('razen-studio.admin.social-media-engagement.twitter.section-1.store');
    //Social Media Engagement - Twitter - Section 1 End

    //Social Media Engagement - Twitter - Section 2 Start
    Route::post('/razen-studio/admin/social-media-engagement/twitter/section-2/store', 'RazenStudio\Admin\SocialMediaEngagement\TwitterController@section_2_store')->name('razen-studio.admin.social-media-engagement.twitter.section-2.store');
    //Social Media Engagement - Twitter - Section 2 End

    //Social Media Engagement - Twitter - Section 3 Start
    Route::post('/razen-studio/admin/social-media-engagement/twitter/section-3/store', 'RazenStudio\Admin\SocialMediaEngagement\TwitterController@section_3_store')->name('razen-studio.admin.social-media-engagement.twitter.section-3.store');
    //Social Media Engagement - Twitter - Section 3 End

    //Social Media Engagement - Twitter - Section 4 Start
    Route::post('/razen-studio/admin/social-media-engagement/twitter/section-4/store', 'RazenStudio\Admin\SocialMediaEngagement\TwitterController@section_4_store')->name('razen-studio.admin.social-media-engagement.twitter.section-4.store');
    //Social Media Engagement - Twitter - Section 4 End

    //Social Media Engagement - Twitter - Section 5 Start
    Route::post('/razen-studio/admin/social-media-engagement/twitter/section-5/store', 'RazenStudio\Admin\SocialMediaEngagement\TwitterController@section_5_store')->name('razen-studio.admin.social-media-engagement.twitter.section-5.store');
    //Social Media Engagement - Twitter - Section 5 End

    //Social Media Engagement - Twitter - Section 6 Start
    Route::post('/razen-studio/admin/social-media-engagement/twitter/section-6/store', 'RazenStudio\Admin\SocialMediaEngagement\TwitterController@section_6_store')->name('razen-studio.admin.social-media-engagement.twitter.section-6.store');
    Route::post('/razen-studio/admin/social-media-engagement/twitter/section-6/edit', 'RazenStudio\Admin\SocialMediaEngagement\TwitterController@section_6_edit')->name('razen-studio.admin.social-media-engagement.twitter.section-6.edit');
    Route::post('/razen-studio/admin/social-media-engagement/twitter/section-6/store/hapus/satu', 'RazenStudio\Admin\SocialMediaEngagement\TwitterController@section_6_hapus_satu')->name('razen-studio.admin.social-media-engagement.twitter.section-6.hapus.satu');
    //Social Media Engagement - Twitter - Section 6 End

    //Social Media Engagement - Twitter - Section 7 Start
    Route::post('/razen-studio/admin/social-media-engagement/twitter/section-7/store', 'RazenStudio\Admin\SocialMediaEngagement\TwitterController@section_7_store')->name('razen-studio.admin.social-media-engagement.twitter.section-7.store');
    //Social Media Engagement - Twitter - Section 7 End

    //Social Media Engagement - Facebook
    Route::get('/razen-studio/admin/social-media-engagement/facebook', 'RazenStudio\Admin\SocialMediaEngagement\FacebookController@index')->name('razen-studio.admin.social-media-engagement.facebook.index');

    //Social Media Engagement - Facebook - Section 1 Start
    Route::post('/razen-studio/admin/social-media-engagement/facebook/section-1/store', 'RazenStudio\Admin\SocialMediaEngagement\FacebookController@section_1_store')->name('razen-studio.admin.social-media-engagement.facebook.section-1.store');
    //Social Media Engagement - Facebook - Section 1 End

    //Social Media Engagement - Facebook - Section 2 Start
    Route::post('/razen-studio/admin/social-media-engagement/facebook/section-2/store', 'RazenStudio\Admin\SocialMediaEngagement\FacebookController@section_2_store')->name('razen-studio.admin.social-media-engagement.facebook.section-2.store');
    //Social Media Engagement - Facebook - Section 2 End

    //Social Media Engagement - Facebook - Section 3 Start
    Route::post('/razen-studio/admin/social-media-engagement/facebook/section-3/store', 'RazenStudio\Admin\SocialMediaEngagement\FacebookController@section_3_store')->name('razen-studio.admin.social-media-engagement.facebook.section-3.store');
    //Social Media Engagement - Facebook - Section 3 End

    //Social Media Engagement - Facebook - Section 4 Start
    Route::post('/razen-studio/admin/social-media-engagement/facebook/section-4/store', 'RazenStudio\Admin\SocialMediaEngagement\FacebookController@section_4_store')->name('razen-studio.admin.social-media-engagement.facebook.section-4.store');
    //Social Media Engagement - Facebook - Section 4 End

    //Social Media Engagement - Facebook - Section 5 Start
    Route::post('/razen-studio/admin/social-media-engagement/facebook/section-5/store', 'RazenStudio\Admin\SocialMediaEngagement\FacebookController@section_5_store')->name('razen-studio.admin.social-media-engagement.facebook.section-5.store');
    Route::post('/razen-studio/admin/social-media-engagement/facebook/section-5/edit', 'RazenStudio\Admin\SocialMediaEngagement\FacebookController@section_5_edit')->name('razen-studio.admin.social-media-engagement.facebook.section-5.edit');
    Route::post('/razen-studio/admin/social-media-engagement/facebook/section-5/store/hapus/satu', 'RazenStudio\Admin\SocialMediaEngagement\FacebookController@section_5_hapus_satu')->name('razen-studio.admin.social-media-engagement.facebook.section-5.hapus.satu');
    //Social Media Engagement - Facebook - Section 5 End

    //Social Media Engagement - Facebook - Section 6 Start
    Route::post('/razen-studio/admin/social-media-engagement/facebook/section-6/store', 'RazenStudio\Admin\SocialMediaEngagement\FacebookController@section_6_store')->name('razen-studio.admin.social-media-engagement.facebook.section-6.store');
    //Social Media Engagement - Facebook - Section 6 End

    //Social Media Engagement - MarketPlace
    Route::get('/razen-studio/admin/social-media-engagement/marketplace', 'RazenStudio\Admin\SocialMediaEngagement\MarketPlaceController@index')->name('razen-studio.admin.social-media-engagement.marketplace.index');

    //Social Media Engagement - MarketPlace - Section 1 Start
    Route::post('/razen-studio/admin/social-media-engagement/marketplace/section-1/store', 'RazenStudio\Admin\SocialMediaEngagement\MarketPlaceController@section_1_store')->name('razen-studio.admin.social-media-engagement.marketplace.section-1.store');
    //Social Media Engagement - MarketPlace - Section 1 End

    //Social Media Engagement - MarketPlace - Section 2 Start
    Route::post('/razen-studio/admin/social-media-engagement/marketplace/section-2/store', 'RazenStudio\Admin\SocialMediaEngagement\MarketPlaceController@section_2_store')->name('razen-studio.admin.social-media-engagement.marketplace.section-2.store');
    //Social Media Engagement - MarketPlace - Section 2 End

    //Social Media Engagement - MarketPlace - Section 3 Start
    Route::post('/razen-studio/admin/social-media-engagement/marketplace/section-3/store', 'RazenStudio\Admin\SocialMediaEngagement\MarketPlaceController@section_3_store')->name('razen-studio.admin.social-media-engagement.marketplace.section-3.store');
    //Social Media Engagement - MarketPlace - Section 3 End

    //Social Media Engagement - MarketPlace - Section 4 Start
    Route::post('/razen-studio/admin/social-media-engagement/marketplace/section-4/store', 'RazenStudio\Admin\SocialMediaEngagement\MarketPlaceController@section_4_store')->name('razen-studio.admin.social-media-engagement.marketplace.section-4.store');
    //Social Media Engagement - MarketPlace - Section 4 End

    //Social Media Engagement - MarketPlace - Section 5 Start
    Route::post('/razen-studio/admin/social-media-engagement/marketplace/section-5/store', 'RazenStudio\Admin\SocialMediaEngagement\MarketPlaceController@section_5_store')->name('razen-studio.admin.social-media-engagement.marketplace.section-5.store');
    //Social Media Engagement - MarketPlace - Section 5 End

    //Social Media Engagement - MarketPlace - Section 6 Start
    Route::post('/razen-studio/admin/social-media-engagement/marketplace/section-6/store', 'RazenStudio\Admin\SocialMediaEngagement\MarketPlaceController@section_6_store')->name('razen-studio.admin.social-media-engagement.marketplace.section-6.store');
    //Social Media Engagement - MarketPlace - Section 6 End

    //Social Media Engagement - MarketPlace - Section 7 Start
    Route::post('/razen-studio/admin/social-media-engagement/marketplace/section-7/store', 'RazenStudio\Admin\SocialMediaEngagement\MarketPlaceController@section_7_store')->name('razen-studio.admin.social-media-engagement.marketplace.section-7.store');
    Route::post('/razen-studio/admin/social-media-engagement/marketplace/section-7/edit', 'RazenStudio\Admin\SocialMediaEngagement\MarketPlaceController@section_7_edit')->name('razen-studio.admin.social-media-engagement.marketplace.section-7.edit');
    Route::post('/razen-studio/admin/social-media-engagement/marketplace/section-7/store/hapus/satu', 'RazenStudio\Admin\SocialMediaEngagement\MarketPlaceController@section_7_hapus_satu')->name('razen-studio.admin.social-media-engagement.marketplace.section-7.hapus.satu');
    //Social Media Engagement - MarketPlace - Section 7 End

    //Social Media Engagement - Google My Business
    Route::get('/razen-studio/admin/social-media-engagement/google-my-business', 'RazenStudio\Admin\SocialMediaEngagement\GoogleMyBusinessController@index')->name('razen-studio.admin.social-media-engagement.google-my-business.index');

    //Social Media Engagement - Google My Business - Section 1 Start
    Route::post('/razen-studio/admin/social-media-engagement/google-my-business/section-1/store', 'RazenStudio\Admin\SocialMediaEngagement\GoogleMyBusinessController@section_1_store')->name('razen-studio.admin.social-media-engagement.google-my-business.section-1.store');
    //Social Media Engagement - Google My Business - Section 1 End

    //Social Media Engagement - Google My Business - Section 2 Start
    Route::post('/razen-studio/admin/social-media-engagement/google-my-business/section-2/store', 'RazenStudio\Admin\SocialMediaEngagement\GoogleMyBusinessController@section_2_store')->name('razen-studio.admin.social-media-engagement.google-my-business.section-2.store');
    //Social Media Engagement - Google My Business - Section 2 End

    //Social Media Engagement - Google My Business - Section 3 Start
    Route::post('/razen-studio/admin/social-media-engagement/google-my-business/section-3/store', 'RazenStudio\Admin\SocialMediaEngagement\GoogleMyBusinessController@section_3_store')->name('razen-studio.admin.social-media-engagement.google-my-business.section-3.store');
    //Social Media Engagement - Google My Business - Section 3 End

    //Social Media Engagement - Google My Business - Section 4 Start
    Route::post('/razen-studio/admin/social-media-engagement/google-my-business/section-4/store', 'RazenStudio\Admin\SocialMediaEngagement\GoogleMyBusinessController@section_4_store')->name('razen-studio.admin.social-media-engagement.google-my-business.section-4.store');
    //Social Media Engagement - Google My Business - Section 4 End

    //Social Media Engagement - Google My Business - Section 5 Start
    Route::post('/razen-studio/admin/social-media-engagement/google-my-business/section-5/store', 'RazenStudio\Admin\SocialMediaEngagement\GoogleMyBusinessController@section_5_store')->name('razen-studio.admin.social-media-engagement.google-my-business.section-5.store');
    //Social Media Engagement - Google My Business - Section 5 End

    //Social Media Engagement - Google My Business - Section 6 Start
    Route::post('/razen-studio/admin/social-media-engagement/google-my-business/section-6/store', 'RazenStudio\Admin\SocialMediaEngagement\GoogleMyBusinessController@section_6_store')->name('razen-studio.admin.social-media-engagement.google-my-business.section-6.store');
    //Social Media Engagement - Google My Business - Section 6 End

    //Social Media Engagement - Google My Business - Section 7 Start
    Route::post('/razen-studio/admin/social-media-engagement/google-my-business/section-7/store', 'RazenStudio\Admin\SocialMediaEngagement\GoogleMyBusinessController@section_7_store')->name('razen-studio.admin.social-media-engagement.google-my-business.section-7.store');
    Route::post('/razen-studio/admin/social-media-engagement/google-my-business/section-7/edit', 'RazenStudio\Admin\SocialMediaEngagement\GoogleMyBusinessController@section_7_edit')->name('razen-studio.admin.social-media-engagement.google-my-business.section-7.edit');
    Route::post('/razen-studio/admin/social-media-engagement/google-my-business/section-7/store/hapus/satu', 'RazenStudio\Admin\SocialMediaEngagement\GoogleMyBusinessController@section_7_hapus_satu')->name('razen-studio.admin.social-media-engagement.google-my-business.section-7.hapus.satu');
    //Social Media Engagement - Google My Business - Section 7 End

    //Social Media Engagement - Playstore
    Route::get('/razen-studio/admin/social-media-engagement/playstore', 'RazenStudio\Admin\SocialMediaEngagement\PlaystoreController@index')->name('razen-studio.admin.social-media-engagement.playstore.index');

    //Social Media Engagement - Playstore - Section 1 Start
    Route::post('/razen-studio/admin/social-media-engagement/playstore/section-1/store', 'RazenStudio\Admin\SocialMediaEngagement\PlaystoreController@section_1_store')->name('razen-studio.admin.social-media-engagement.playstore.section-1.store');
    //Social Media Engagement - Playstore - Section 1 End

    //Social Media Engagement - Playstore - Section 2 Start
    Route::post('/razen-studio/admin/social-media-engagement/playstore/section-2/store', 'RazenStudio\Admin\SocialMediaEngagement\PlaystoreController@section_2_store')->name('razen-studio.admin.social-media-engagement.playstore.section-2.store');
    //Social Media Engagement - Playstore - Section 2 End

    //Social Media Engagement - Playstore - Section 3 Start
    Route::post('/razen-studio/admin/social-media-engagement/playstore/section-3/store', 'RazenStudio\Admin\SocialMediaEngagement\PlaystoreController@section_3_store')->name('razen-studio.admin.social-media-engagement.playstore.section-3.store');
    //Social Media Engagement - Playstore - Section 3 End

    //Social Media Engagement - Playstore - Section 4 Start
    Route::post('/razen-studio/admin/social-media-engagement/playstore/section-4/store', 'RazenStudio\Admin\SocialMediaEngagement\PlaystoreController@section_4_store')->name('razen-studio.admin.social-media-engagement.playstore.section-4.store');
    //Social Media Engagement - Playstore - Section 4 End

    //Social Media Engagement - Playstore - Section 5 Start
    Route::post('/razen-studio/admin/social-media-engagement/playstore/section-5/store', 'RazenStudio\Admin\SocialMediaEngagement\PlaystoreController@section_5_store')->name('razen-studio.admin.social-media-engagement.playstore.section-5.store');
    //Social Media Engagement - Playstore - Section 5 End

    //Social Media Engagement - Playstore - Section 6 Start
    Route::post('/razen-studio/admin/social-media-engagement/playstore/section-6/store', 'RazenStudio\Admin\SocialMediaEngagement\PlaystoreController@section_6_store')->name('razen-studio.admin.social-media-engagement.playstore.section-6.store');
    Route::post('/razen-studio/admin/social-media-engagement/playstore/section-6/edit', 'RazenStudio\Admin\SocialMediaEngagement\PlaystoreController@section_6_edit')->name('razen-studio.admin.social-media-engagement.playstore.section-6.edit');
    Route::post('/razen-studio/admin/social-media-engagement/playstore/section-6/store/hapus/satu', 'RazenStudio\Admin\SocialMediaEngagement\PlaystoreController@section_6_hapus_satu')->name('razen-studio.admin.social-media-engagement.playstore.section-6.hapus.satu');
    //Social Media Engagement - Playstore - Section 6 End

    //Video Production
    Route::get('/razen-studio/admin/video-production/atur', 'RazenStudio\Admin\VideoProductionController@index')->name('razen-studio.admin.video-production.atur.index');

    //Video Production - Section 1
    Route::post('/razen-studio/admin/video-production/atur/section-1', 'RazenStudio\Admin\VideoProductionController@section_1_store')->name('razen-studio.admin.video-production.atur.section_1_store');

    //Video Production - Section 2
    Route::post('/razen-studio/admin/video-production/atur/section-2', 'RazenStudio\Admin\VideoProductionController@section_2_store')->name('razen-studio.admin.video-production.atur.section_2_store');

    //Video Production - Section 3 Start
    Route::post('/razen-studio/admin/video-production/atur/section-3/store', 'RazenStudio\Admin\VideoProductionController@section_3_store')->name('razen-studio.admin.video-production.atur.section-3.store');
    Route::post('/razen-studio/admin/video-production/atur/section-3/edit', 'RazenStudio\Admin\VideoProductionController@section_3_edit')->name('razen-studio.admin.video-production.atur.section-3.edit');
    Route::post('/razen-studio/admin/video-production/atur/section-3/store/hapus/satu', 'RazenStudio\Admin\VideoProductionController@section_3_hapus_satu')->name('razen-studio.admin.video-production.atur.section-3.hapus.satu');

    //Video Production - Section 4 Start
    Route::post('/razen-studio/admin/video-production/atur/section-4/store', 'RazenStudio\Admin\VideoProductionController@section_4_store')->name('razen-studio.admin.video-production.atur.section-4.store');
    Route::post('/razen-studio/admin/video-production/atur/section-4/edit', 'RazenStudio\Admin\VideoProductionController@section_4_edit')->name('razen-studio.admin.video-production.atur.section-4.edit');
    Route::post('/razen-studio/admin/video-production/atur/section-4/store/hapus/satu', 'RazenStudio\Admin\VideoProductionController@section_4_hapus_satu')->name('razen-studio.admin.video-production.atur.section-4.hapus.satu');

    //Video Production - Video Animasi
    Route::get('/razen-studio/admin/video-production/video-animasi', 'RazenStudio\Admin\VideoProduction\VideoAnimasiController@index')->name('razen-studio.admin.video-production.video-animasi.index');

    //Video Production - Video Animasi - Section 1
    Route::post('/razen-studio/admin/video-production/video-animasi/section-1', 'RazenStudio\Admin\VideoProduction\VideoAnimasiController@section_1_store')->name('razen-studio.admin.video-production.video-animasi.section_1_store');

    //Video Production - Video Animasi - Section 2
    Route::post('/razen-studio/admin/video-production/video-animasi/section-2', 'RazenStudio\Admin\VideoProduction\VideoAnimasiController@section_2_store')->name('razen-studio.admin.video-production.video-animasi.section_2_store');

    //Video Production - Video Animasi - Section 3
    Route::post('/razen-studio/admin/video-production/video-animasi/section-3/store', 'RazenStudio\Admin\VideoProduction\VideoAnimasiController@section_3_store')->name('razen-studio.admin.video-production.video-animasi.section-3.store');
    Route::post('/razen-studio/admin/video-production/video-animasi/section-3/edit', 'RazenStudio\Admin\VideoProduction\VideoAnimasiController@section_3_edit')->name('razen-studio.admin.video-production.video-animasi.section-3.edit');
    Route::post('/razen-studio/admin/video-production/video-animasi/section-3/store/hapus/satu', 'RazenStudio\Admin\VideoProduction\VideoAnimasiController@section_3_hapus_satu')->name('razen-studio.admin.video-production.video-animasi.section-3.hapus.satu');

    //Video Production - Video Animasi - Section 4
    Route::post('/razen-studio/admin/video-production/video-animasi/section-4', 'RazenStudio\Admin\VideoProduction\VideoAnimasiController@section_4_store')->name('razen-studio.admin.video-production.video-animasi.section_4_store');

    //Video Production - Video Animasi - Section 5
    Route::post('/razen-studio/admin/video-production/video-animasi/section-5', 'RazenStudio\Admin\VideoProduction\VideoAnimasiController@section_5_store')->name('razen-studio.admin.video-production.video-animasi.section_5_store');

    //Video Production - Video Animasi - Section 6
    Route::post('/razen-studio/admin/video-production/video-animasi/section-6/store', 'RazenStudio\Admin\VideoProduction\VideoAnimasiController@section_6_store')->name('razen-studio.admin.video-production.video-animasi.section-6.store');
    Route::post('/razen-studio/admin/video-production/video-animasi/section-6/edit', 'RazenStudio\Admin\VideoProduction\VideoAnimasiController@section_6_edit')->name('razen-studio.admin.video-production.video-animasi.section-6.edit');
    Route::post('/razen-studio/admin/video-production/video-animasi/section-6/store/hapus/satu', 'RazenStudio\Admin\VideoProduction\VideoAnimasiController@section_6_hapus_satu')->name('razen-studio.admin.video-production.video-animasi.section-6.hapus.satu');

    //Video Production - Video Animasi - Section 7
    Route::post('/razen-studio/admin/video-production/video-animasi/section-7/store', 'RazenStudio\Admin\VideoProduction\VideoAnimasiController@section_7_store')->name('razen-studio.admin.video-production.video-animasi.section-7.store');
    Route::post('/razen-studio/admin/video-production/video-animasi/section-7/edit', 'RazenStudio\Admin\VideoProduction\VideoAnimasiController@section_7_edit')->name('razen-studio.admin.video-production.video-animasi.section-7.edit');
    Route::post('/razen-studio/admin/video-production/video-animasi/section-7/store/hapus/satu', 'RazenStudio\Admin\VideoProduction\VideoAnimasiController@section_7_hapus_satu')->name('razen-studio.admin.video-production.video-animasi.section-7.hapus.satu');

    //Video Production - Video Konten Sosmed
    Route::get('/razen-studio/admin/video-production/video-konten-sosmed', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@index')->name('razen-studio.admin.video-production.video-konten-sosmed.index');

    //Video Production - Video Konten Sosmed - Section 1
    Route::post('/razen-studio/admin/video-production/video-konten-sosmed/section-1', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@section_1_store')->name('razen-studio.admin.video-production.video-konten-sosmed.section_1_store');

    //Video Production - Video Konten Sosmed - Section 2
    Route::post('/razen-studio/admin/video-production/video-konten-sosmed/section-2', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@section_2_store')->name('razen-studio.admin.video-production.video-konten-sosmed.section_2_store');

    //Video Production - Video Konten Sosmed - Section 3
    Route::post('/razen-studio/admin/video-production/video-konten-sosmed/section-3', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@section_3_store')->name('razen-studio.admin.video-production.video-konten-sosmed.section_3_store');

    //Video Production - Video Konten Sosmed - Section 4
    Route::post('/razen-studio/admin/video-production/video-konten-sosmed/section-4/store', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@section_4_store')->name('razen-studio.admin.video-production.video-konten-sosmed.section-4.store');
    Route::post('/razen-studio/admin/video-production/video-konten-sosmed/section-4/edit', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@section_4_edit')->name('razen-studio.admin.video-production.video-konten-sosmed.section-4.edit');
    Route::post('/razen-studio/admin/video-production/video-konten-sosmed/section-4/store/hapus/satu', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@section_4_hapus_satu')->name('razen-studio.admin.video-production.video-konten-sosmed.section-4.hapus.satu');

    //Video Production - Video Konten Sosmed - Section 5
    Route::post('/razen-studio/admin/video-production/video-konten-sosmed/section-5/store', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@section_5_store')->name('razen-studio.admin.video-production.video-konten-sosmed.section-5.store');
    Route::post('/razen-studio/admin/video-production/video-konten-sosmed/section-5/item-1/store', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@section_5_item_1_store')->name('razen-studio.admin.video-production.video-konten-sosmed.section-5.item-1.store');
    Route::post('/razen-studio/admin/video-production/video-konten-sosmed/section-5/item-2/store', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@section_5_item_2_store')->name('razen-studio.admin.video-production.video-konten-sosmed.section-5.item-2.store');
    Route::post('/razen-studio/admin/video-production/video-konten-sosmed/section-5/item-3/store', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@section_5_item_3_store')->name('razen-studio.admin.video-production.video-konten-sosmed.section-5.item-3.store');
    Route::post('/razen-studio/admin/video-production/video-konten-sosmed/section-5/item-4/store', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@section_5_item_4_store')->name('razen-studio.admin.video-production.video-konten-sosmed.section-5.item-4.store');
    Route::post('/razen-studio/admin/video-production/video-konten-sosmed/section-5/item-5/store', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@section_5_item_5_store')->name('razen-studio.admin.video-production.video-konten-sosmed.section-5.item-5.store');

    //Video Production - Video Konten Sosmed - Section 6
    Route::post('/razen-studio/admin/video-production/video-konten-sosmed/section-6/store', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@section_6_store')->name('razen-studio.admin.video-production.video-konten-sosmed.section-6.store');
    Route::post('/razen-studio/admin/video-production/video-konten-sosmed/section-6/edit', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@section_6_edit')->name('razen-studio.admin.video-production.video-konten-sosmed.section-6.edit');
    Route::post('/razen-studio/admin/video-production/video-konten-sosmed/section-6/store/hapus/satu', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@section_6_hapus_satu')->name('razen-studio.admin.video-production.video-konten-sosmed.section-6.hapus.satu');

    //Video Production - Video Konten Sosmed - Section 7
    Route::post('/razen-studio/admin/video-production/video-konten-sosmed/section-7/store', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@section_7_store')->name('razen-studio.admin.video-production.video-konten-sosmed.section-7.store');
    Route::post('/razen-studio/admin/video-production/video-konten-sosmed/section-7/edit', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@section_7_edit')->name('razen-studio.admin.video-production.video-konten-sosmed.section-7.edit');
    Route::post('/razen-studio/admin/video-production/video-konten-sosmed/section-7/store/hapus/satu', 'RazenStudio\Admin\VideoProduction\VideoKontenSosmedController@section_7_hapus_satu')->name('razen-studio.admin.video-production.video-konten-sosmed.section-7.hapus.satu');

    //Video Production - Video Company Profile
    Route::get('/razen-studio/admin/video-production/video-company-profile', 'RazenStudio\Admin\VideoProduction\VideoCompanyProfileController@index')->name('razen-studio.admin.video-production.video-company-profile.index');

    //Video Production - Video Company Profile - Section 1
    Route::post('/razen-studio/admin/video-production/video-company-profile/section-1', 'RazenStudio\Admin\VideoProduction\VideoCompanyProfileController@section_1_store')->name('razen-studio.admin.video-production.video-company-profile.section_1_store');

    //Video Production - Video Company Profile - Section 2
    Route::post('/razen-studio/admin/video-production/video-company-profile/section-2', 'RazenStudio\Admin\VideoProduction\VideoCompanyProfileController@section_2_store')->name('razen-studio.admin.video-production.video-company-profile.section_2_store');

    //Video Production - Video Company Profile - Section 3
    Route::post('/razen-studio/admin/video-production/video-company-profile/section-3/store', 'RazenStudio\Admin\VideoProduction\VideoCompanyProfileController@section_3_store')->name('razen-studio.admin.video-production.video-company-profile.section-3.store');
    Route::post('/razen-studio/admin/video-production/video-company-profile/section-3/edit', 'RazenStudio\Admin\VideoProduction\VideoCompanyProfileController@section_3_edit')->name('razen-studio.admin.video-production.video-company-profile.section-3.edit');
    Route::post('/razen-studio/admin/video-production/video-company-profile/section-3/store/hapus/satu', 'RazenStudio\Admin\VideoProduction\VideoCompanyProfileController@section_3_hapus_satu')->name('razen-studio.admin.video-production.video-company-profile.section-3.hapus.satu');

    //Video Production - Video Company Profile - Section 4
    Route::post('/razen-studio/admin/video-production/video-company-profile/section-4/store', 'RazenStudio\Admin\VideoProduction\VideoCompanyProfileController@section_4_store')->name('razen-studio.admin.video-production.video-company-profile.section-4.store');
    Route::post('/razen-studio/admin/video-production/video-company-profile/section-4/item-1/store', 'RazenStudio\Admin\VideoProduction\VideoCompanyProfileController@section_4_item_1_store')->name('razen-studio.admin.video-production.video-company-profile.section-4.item-1.store');
    Route::post('/razen-studio/admin/video-production/video-company-profile/section-4/item-2/store', 'RazenStudio\Admin\VideoProduction\VideoCompanyProfileController@section_4_item_2_store')->name('razen-studio.admin.video-production.video-company-profile.section-4.item-2.store');
    Route::post('/razen-studio/admin/video-production/video-company-profile/section-4/item-3/store', 'RazenStudio\Admin\VideoProduction\VideoCompanyProfileController@section_4_item_3_store')->name('razen-studio.admin.video-production.video-company-profile.section-4.item-3.store');
    Route::post('/razen-studio/admin/video-production/video-company-profile/section-4/item-4/store', 'RazenStudio\Admin\VideoProduction\VideoCompanyProfileController@section_4_item_4_store')->name('razen-studio.admin.video-production.video-company-profile.section-4.item-4.store');
    Route::post('/razen-studio/admin/video-production/video-company-profile/section-4/item-5/store', 'RazenStudio\Admin\VideoProduction\VideoCompanyProfileController@section_4_item_5_store')->name('razen-studio.admin.video-production.video-company-profile.section-4.item-5.store');

    //Video Production - Video Company Profile - Section 5
    Route::post('/razen-studio/admin/video-production/video-company-profile/section-5', 'RazenStudio\Admin\VideoProduction\VideoCompanyProfileController@section_5_store')->name('razen-studio.admin.video-production.video-company-profile.section_5_store');

    //Video Production - Video Company Profile - Section 6
    Route::post('/razen-studio/admin/video-production/video-company-profile/section-6/store', 'RazenStudio\Admin\VideoProduction\VideoCompanyProfileController@section_6_store')->name('razen-studio.admin.video-production.video-company-profile.section-6.store');
    Route::post('/razen-studio/admin/video-production/video-company-profile/section-6/edit', 'RazenStudio\Admin\VideoProduction\VideoCompanyProfileController@section_6_edit')->name('razen-studio.admin.video-production.video-company-profile.section-6.edit');
    Route::post('/razen-studio/admin/video-production/video-company-profile/section-6/store/hapus/satu', 'RazenStudio\Admin\VideoProduction\VideoCompanyProfileController@section_6_hapus_satu')->name('razen-studio.admin.video-production.video-company-profile.section-6.hapus.satu');

    //Commercial Photography
    Route::get('/razen-studio/admin/commercial-photography/atur', 'RazenStudio\Admin\CommercialPhotography\AturController@index')->name('razen-studio.admin.commercial-photography.atur.index');

    Route::post('/razen-studio/admin/commercial-photography/section-1/store', 'RazenStudio\Admin\CommercialPhotography\AturController@section_1_store')->name('razen-studio.admin.commercial-photography.atur.section-1.store');

    Route::post('/razen-studio/admin/commercial-photography/section-2/store', 'RazenStudio\Admin\CommercialPhotography\AturController@section_2_store')->name('razen-studio.admin.commercial-photography.atur.section-2.store');

    //Commercial Photography - Section 3 Start
    Route::post('/razen-studio/admin/commercial-photography/section-3/store', 'RazenStudio\Admin\CommercialPhotography\AturController@section_3_store')->name('razen-studio.admin.commercial-photography.atur.section-3.store');
    Route::post('/razen-studio/admin/commercial-photography/section-3/edit', 'RazenStudio\Admin\CommercialPhotography\AturController@section_3_edit')->name('razen-studio.admin.commercial-photography.atur.section-3.edit');
    Route::post('/razen-studio/admin/commercial-photography/section-3/store/hapus/satu', 'RazenStudio\Admin\CommercialPhotography\AturController@section_3_hapus_satu')->name('razen-studio.admin.commercial-photography.atur.section-3.hapus.satu');

    //Commercial Photography - Section 4 Start
    Route::post('/razen-studio/admin/commercial-photography/section-4/store', 'RazenStudio\Admin\CommercialPhotography\AturController@section_4_store')->name('razen-studio.admin.commercial-photography.atur.section-4.store');
    Route::post('/razen-studio/admin/commercial-photography/section-4/edit', 'RazenStudio\Admin\CommercialPhotography\AturController@section_4_edit')->name('razen-studio.admin.commercial-photography.atur.section-4.edit');
    Route::post('/razen-studio/admin/commercial-photography/section-4/store/hapus/satu', 'RazenStudio\Admin\CommercialPhotography\AturController@section_4_hapus_satu')->name('razen-studio.admin.commercial-photography.atur.section-4.hapus.satu');

    Route::post('/razen-studio/admin/commercial-photography/section-5/store', 'RazenStudio\Admin\CommercialPhotography\AturController@section_5_store')->name('razen-studio.admin.commercial-photography.atur.section-5.store');

    //Commercial Photography - Section 6 Start
    Route::post('/razen-studio/admin/commercial-photography/section-6/store', 'RazenStudio\Admin\CommercialPhotography\AturController@section_6_store')->name('razen-studio.admin.commercial-photography.atur.section-6.store');
    Route::post('/razen-studio/admin/commercial-photography/section-6/item/store', 'RazenStudio\Admin\CommercialPhotography\AturController@section_6_item_store')->name('razen-studio.admin.commercial-photography.atur.section-6.item.store');
    Route::post('/razen-studio/admin/commercial-photography/section-6/item/hapus', 'RazenStudio\Admin\CommercialPhotography\AturController@section_6_item_hapus')->name('razen-studio.admin.commercial-photography.atur.section-6.item.hapus');

    //Commercial Photography - Section 7
    Route::post('/razen-studio/admin/commercial-photography/section-7/store', 'RazenStudio\Admin\CommercialPhotography\AturController@section_7_store')->name('razen-studio.admin.commercial-photography.atur.section-7.store');
    Route::post('/razen-studio/admin/commercial-photography/section-7/edit', 'RazenStudio\Admin\CommercialPhotography\AturController@section_7_edit')->name('razen-studio.admin.commercial-photography.atur.section-7.edit');
    Route::post('/razen-studio/admin/commercial-photography/section-7/store/hapus/satu', 'RazenStudio\Admin\CommercialPhotography\AturController@section_7_hapus_satu')->name('razen-studio.admin.commercial-photography.atur.section-7.hapus.satu');

    //Commercial Photography - Section 8
    Route::post('/razen-studio/admin/commercial-photography/section-8/store', 'RazenStudio\Admin\CommercialPhotography\AturController@section_8_store')->name('razen-studio.admin.commercial-photography.atur.section-8.store');
    Route::post('/razen-studio/admin/commercial-photography/section-8/edit', 'RazenStudio\Admin\CommercialPhotography\AturController@section_8_edit')->name('razen-studio.admin.commercial-photography.atur.section-8.edit');
    Route::post('/razen-studio/admin/commercial-photography/section-8/store/hapus/satu', 'RazenStudio\Admin\CommercialPhotography\AturController@section_8_hapus_satu')->name('razen-studio.admin.commercial-photography.atur.section-8.hapus.satu');

    //Commercial Photography - Section 9
    Route::post('/razen-studio/admin/commercial-photography/section-9/store', 'RazenStudio\Admin\CommercialPhotography\AturController@section_9_store')->name('razen-studio.admin.commercial-photography.atur.section-9.store');
    Route::post('/razen-studio/admin/commercial-photography/section-9/item-1/store', 'RazenStudio\Admin\CommercialPhotography\AturController@section_9_item_1_store')->name('razen-studio.admin.commercial-photography.atur.section-9.item-1.store');
    Route::post('/razen-studio/admin/commercial-photography/section-9/item-2/store', 'RazenStudio\Admin\CommercialPhotography\AturController@section_9_item_2_store')->name('razen-studio.admin.commercial-photography.atur.section-9.item-2.store');
    Route::post('/razen-studio/admin/commercial-photography/section-9/item-3/store', 'RazenStudio\Admin\CommercialPhotography\AturController@section_9_item_3_store')->name('razen-studio.admin.commercial-photography.atur.section-9.item-3.store');

    Route::post('/razen-studio/admin/commercial-photography/section-10/store', 'RazenStudio\Admin\CommercialPhotography\AturController@section_10_store')->name('razen-studio.admin.commercial-photography.atur.section-10.store');

    //Commercial Photography - Section 11
    Route::post('/razen-studio/admin/commercial-photography/section-11/store', 'RazenStudio\Admin\CommercialPhotography\AturController@section_11_store')->name('razen-studio.admin.commercial-photography.atur.section-11.store');
    Route::post('/razen-studio/admin/commercial-photography/section-11/edit', 'RazenStudio\Admin\CommercialPhotography\AturController@section_11_edit')->name('razen-studio.admin.commercial-photography.atur.section-11.edit');
    Route::post('/razen-studio/admin/commercial-photography/section-11/store/hapus/satu', 'RazenStudio\Admin\CommercialPhotography\AturController@section_11_hapus_satu')->name('razen-studio.admin.commercial-photography.atur.section-11.hapus.satu');

    //Web Development
    Route::get('/razen-studio/admin/web-development/atur', 'RazenStudio\Admin\WebDevelopment\AturController@index')->name('razen-studio.admin.web-development.atur.index');

    Route::prefix('razen-studio')->group(function(){
        Route::prefix('admin')->group(function(){
            Route::prefix('web-development')->group(function(){
                Route::prefix('data')->group(function(){
                    Route::prefix('harga-website')->group(function(){
                        Route::get('/', 'RazenStudio\Admin\WebDevelopment\Data\HargaWebsiteController@index')->name('razen-studio.admin.web-development.data.harga-website.index');
                        Route::get('/create', 'RazenStudio\Admin\WebDevelopment\Data\HargaWebsiteController@create')->name('razen-studio.admin.web-development.data.harga-website.create');
                        Route::get('/show/{id}', 'RazenStudio\Admin\WebDevelopment\Data\HargaWebsiteController@show')->name('razen-studio.admin.web-development.data.harga-website.show');
                        Route::post('/','RazenStudio\Admin\WebDevelopment\Data\HargaWebsiteController@store')->name('razen-studio.admin.web-development.data.harga-website.store');
                        Route::get('/edit/{id}','RazenStudio\Admin\WebDevelopment\Data\HargaWebsiteController@edit')->name('razen-studio.admin.web-development.data.harga-website.edit');
                        Route::post('/update/{id}','RazenStudio\Admin\WebDevelopment\Data\HargaWebsiteController@update')->name('razen-studio.admin.web-development.data.harga-website.update');
                        Route::get('/destroy/{id}','RazenStudio\Admin\WebDevelopment\Data\HargaWebsiteController@destroy')->name('razen-studio.admin.web-development.data.harga-website.destroy');
                    });

                    Route::prefix('testimoni')->group(function(){
                        Route::get('/', 'RazenStudio\Admin\WebDevelopment\Data\TestimoniController@index')->name('razen-studio.admin.web-development.data.testimoni.index');
                        Route::get('/create', 'RazenStudio\Admin\WebDevelopment\Data\TestimoniController@create')->name('razen-studio.admin.web-development.data.testimoni.create');
                        Route::get('/show/{id}', 'RazenStudio\Admin\WebDevelopment\Data\TestimoniController@show')->name('razen-studio.admin.web-development.data.testimoni.show');
                        Route::post('/','RazenStudio\Admin\WebDevelopment\Data\TestimoniController@store')->name('razen-studio.admin.web-development.data.testimoni.store');
                        Route::get('/edit/{id}','RazenStudio\Admin\WebDevelopment\Data\TestimoniController@edit')->name('razen-studio.admin.web-development.data.testimoni.edit');
                        Route::post('/update','RazenStudio\Admin\WebDevelopment\Data\TestimoniController@update')->name('razen-studio.admin.web-development.data.testimoni.update');
                        Route::get('/destroy/{id}','RazenStudio\Admin\WebDevelopment\Data\TestimoniController@destroy')->name('razen-studio.admin.web-development.data.testimoni.destroy');
                    });
                });
            });
        });
    });

    //Web Development - Section 1
    Route::post('/razen-studio/admin/web-development/atur/section-1/store', 'RazenStudio\Admin\WebDevelopment\AturController@section_1_store')->name('razen-studio.admin.web-development.atur.section-1.store');

    //Web Development - Section 2
    Route::post('/razen-studio/admin/web-development/atur/section-2/store', 'RazenStudio\Admin\WebDevelopment\AturController@section_2_store')->name('razen-studio.admin.web-development.atur.section-2.store');

    //Web Development - Section 3
    Route::post('/razen-studio/admin/web-development/atur/section-3/store', 'RazenStudio\Admin\WebDevelopment\AturController@section_3_store')->name('razen-studio.admin.web-development.atur.section-3.store');
    Route::post('/razen-studio/admin/web-development/atur/section-3/item-1/store', 'RazenStudio\Admin\WebDevelopment\AturController@section_3_item_1_store')->name('razen-studio.admin.web-development.atur.section-3.item-1.store');
    Route::post('/razen-studio/admin/web-development/atur/section-3/item-2/store', 'RazenStudio\Admin\WebDevelopment\AturController@section_3_item_2_store')->name('razen-studio.admin.web-development.atur.section-3.item-2.store');
    Route::post('/razen-studio/admin/web-development/atur/section-3/item-3/store', 'RazenStudio\Admin\WebDevelopment\AturController@section_3_item_3_store')->name('razen-studio.admin.web-development.atur.section-3.item-3.store');

    //Web Development - Section 4
    Route::post('/razen-studio/admin/web-development/atur/section-4/store', 'RazenStudio\Admin\WebDevelopment\AturController@section_4_store')->name('razen-studio.admin.web-development.atur.section-4.store');

    //Web Development - Section 5
    Route::post('/razen-studio/admin/web-development/atur/section-5/store', 'RazenStudio\Admin\WebDevelopment\AturController@section_5_store')->name('razen-studio.admin.web-development.atur.section-5.store');

    //Web Development - Section 6
    Route::post('/razen-studio/admin/web-development/atur/section-6/store', 'RazenStudio\Admin\WebDevelopment\AturController@section_6_store')->name('razen-studio.admin.web-development.atur.section-6.store');
    Route::post('/razen-studio/admin/web-development/atur/section-6/edit', 'RazenStudio\Admin\WebDevelopment\AturController@section_6_edit')->name('razen-studio.admin.web-development.atur.section-6.edit');
    Route::post('/razen-studio/admin/web-development/atur/section-6/store/hapus/satu', 'RazenStudio\Admin\WebDevelopment\AturController@section_6_hapus_satu')->name('razen-studio.admin.web-development.atur.section-6.hapus.satu');

    //Web Development - Section 7
    Route::post('/razen-studio/admin/web-development/atur/section-7/store', 'RazenStudio\Admin\WebDevelopment\AturController@section_7_store')->name('razen-studio.admin.web-development.atur.section-7.store');

    //Web Development - Section 8
    Route::post('/razen-studio/admin/web-development/atur/section-8/store', 'RazenStudio\Admin\WebDevelopment\AturController@section_8_store')->name('razen-studio.admin.web-development.atur.section-8.store');
    Route::post('/razen-studio/admin/web-development/atur/section-8/edit', 'RazenStudio\Admin\WebDevelopment\AturController@section_8_edit')->name('razen-studio.admin.web-development.atur.section-8.edit');
    Route::post('/razen-studio/admin/web-development/atur/section-8/store/hapus/satu', 'RazenStudio\Admin\WebDevelopment\AturController@section_8_hapus_satu')->name('razen-studio.admin.web-development.atur.section-8.hapus.satu');

    //Web Development - Section 9
    Route::post('/razen-studio/admin/web-development/atur/section-9/store', 'RazenStudio\Admin\WebDevelopment\AturController@section_9_store')->name('razen-studio.admin.web-development.atur.section-9.store');
    Route::post('/razen-studio/admin/web-development/atur/section-9/edit', 'RazenStudio\Admin\WebDevelopment\AturController@section_9_edit')->name('razen-studio.admin.web-development.atur.section-9.edit');
    Route::post('/razen-studio/admin/web-development/atur/section-9/store/hapus/satu', 'RazenStudio\Admin\WebDevelopment\AturController@section_9_hapus_satu')->name('razen-studio.admin.web-development.atur.section-9.hapus.satu');

    //Web Development - Section 10
    Route::post('/razen-studio/admin/web-development/atur/section-10/store', 'RazenStudio\Admin\WebDevelopment\AturController@section_10_store')->name('razen-studio.admin.web-development.atur.section-10.store');

    //Visual Branding Design
    Route::get('/razen-studio/admin/visual-branding-design/atur', 'RazenStudio\Admin\VisualBrandingDesign\AturController@index')->name('razen-studio.admin.visual-branding-design.atur.index');

    //Visual Branding Design - Section - 1
    Route::post('/razen-studio/admin/visual-branding-design/atur/section-1/store', 'RazenStudio\Admin\VisualBrandingDesign\AturController@section_1_store')->name('razen-studio.admin.visual-branding-design.atur.section-1.store');

    //Visual Branding Design - Section - 2
    Route::post('/razen-studio/admin/visual-branding-design/atur/section-2/store', 'RazenStudio\Admin\VisualBrandingDesign\AturController@section_2_store')->name('razen-studio.admin.visual-branding-design.atur.section-2.store');

    //Visual Branding Design - Section - 3
    Route::post('/razen-studio/admin/visual-branding-design/atur/section-3/store', 'RazenStudio\Admin\VisualBrandingDesign\AturController@section_3_store')->name('razen-studio.admin.visual-branding-design.atur.section-3.store');
    Route::post('/razen-studio/admin/visual-branding-design/atur/section-3/edit', 'RazenStudio\Admin\VisualBrandingDesign\AturController@section_3_edit')->name('razen-studio.admin.visual-branding-design.atur.section-3.edit');
    Route::post('/razen-studio/admin/visual-branding-design/atur/section-3/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\AturController@section_3_hapus_satu')->name('razen-studio.admin.visual-branding-design.atur.section-3.hapus.satu');

    //Visual Branding Design - Section - 4
    Route::post('/razen-studio/admin/visual-branding-design/atur/section-4/store', 'RazenStudio\Admin\VisualBrandingDesign\AturController@section_4_store')->name('razen-studio.admin.visual-branding-design.atur.section-4.store');
    Route::post('/razen-studio/admin/visual-branding-design/atur/section-4/item-1/store', 'RazenStudio\Admin\VisualBrandingDesign\AturController@section_4_item_1_store')->name('razen-studio.admin.visual-branding-design.atur.section-4.item-1.store');
    Route::post('/razen-studio/admin/visual-branding-design/atur/section-4/item-2/store', 'RazenStudio\Admin\VisualBrandingDesign\AturController@section_4_item_2_store')->name('razen-studio.admin.visual-branding-design.atur.section-4.item-2.store');
    Route::post('/razen-studio/admin/visual-branding-design/atur/section-4/item-3/store', 'RazenStudio\Admin\VisualBrandingDesign\AturController@section_4_item_3_store')->name('razen-studio.admin.visual-branding-design.atur.section-4.item-3.store');
    Route::post('/razen-studio/admin/visual-branding-design/atur/section-4/item-4/store', 'RazenStudio\Admin\VisualBrandingDesign\AturController@section_4_item_4_store')->name('razen-studio.admin.visual-branding-design.atur.section-4.item-4.store');
    Route::post('/razen-studio/admin/visual-branding-design/atur/section-4/item-5/store', 'RazenStudio\Admin\VisualBrandingDesign\AturController@section_4_item_5_store')->name('razen-studio.admin.visual-branding-design.atur.section-4.item-5.store');

    //Visual Branding Design - Section - 5
    Route::post('/razen-studio/admin/visual-branding-design/atur/section-5/store', 'RazenStudio\Admin\VisualBrandingDesign\AturController@section_5_store')->name('razen-studio.admin.visual-branding-design.atur.section-5.store');
    Route::post('/razen-studio/admin/visual-branding-design/atur/section-5/edit', 'RazenStudio\Admin\VisualBrandingDesign\AturController@section_5_edit')->name('razen-studio.admin.visual-branding-design.atur.section-5.edit');
    Route::post('/razen-studio/admin/visual-branding-design/atur/section-5/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\AturController@section_5_hapus_satu')->name('razen-studio.admin.visual-branding-design.atur.section-5.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis
    Route::get('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/atur', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@index')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index');

    //Visual Branding Design - Jasa Desain Grafis - Section 1
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-1.store');

    //Visual Branding Design - Jasa Desain Grafis - Section 2
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-2.store');

    //Visual Branding Design - Jasa Desain Grafis - Section 3
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-3.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-3/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_3_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-3.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-3/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_3_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-3.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Section 4
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-4.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-4/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_4_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-4.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-4/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_4_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-4.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Section 5
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-5.store');

    //Visual Branding Design - Jasa Desain Grafis - Section 6
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-6/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_6_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-6.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-6/item-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_6_item_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-6.item-1.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-6/item-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_6_item_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-6.item-2.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-6/item-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_6_item_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-6.item-3.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-6/item-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_6_item_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-6.item-4.store');

    //Visual Branding Design - Jasa Desain Grafis - Section 7
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-7/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_7_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-7.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-7/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_7_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-7.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-7/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_7_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-7.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Section 8
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-8/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_8_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-8.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-8/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_8_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-8.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/section-8/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\AturController@section_8_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.section-8.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Logo
    Route::get('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-logo', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLogoController@index')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.index');

    //Visual Branding Design - Jasa Desain Grafis - Desain Logo - Section 1
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-logo/section-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLogoController@section_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.section-1.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Logo - Section 2
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-logo/section-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLogoController@section_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.section-2.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Logo - Section 3
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-logo/section-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLogoController@section_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.section-3.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Logo - Section 4
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-logo/section-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLogoController@section_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.section-4.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Logo - Section 5
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-logo/section-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLogoController@section_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.section-5.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-logo/section-5/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLogoController@section_5_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.section-5.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-logo/section-5/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLogoController@section_5_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.section-5.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Logo - Section 6
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-logo/section-6/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLogoController@section_6_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.section-6.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-logo/section-6/item/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLogoController@section_6_item_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.section-6.item.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-logo/section-6/item/hapus', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLogoController@section_6_item_hapus')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.section-6.item.hapus');

    //Visual Branding Design - Jasa Desain Grafis - Desain Logo - Section 7
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-logo/section-7/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLogoController@section_7_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.section-7.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-logo/section-7/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLogoController@section_7_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.section-7.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-logo/section-7/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLogoController@section_7_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.section-7.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Logo - Section 8
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-logo/section-8/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLogoController@section_8_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.section-8.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-logo/section-8/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLogoController@section_8_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.section-8.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-logo/section-8/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLogoController@section_8_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-logo.section-8.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Promosi Digital
    Route::get('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@index')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.index');

    //Visual Branding Design - Jasa Desain Grafis - Desain Promosi Digital - Section 1
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-1.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Promosi Digital - Section 2
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-2.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Promosi Digital - Section 3
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-3.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Promosi Digital - Section 4
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-4.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Promosi Digital - Section 5
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-5.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-5/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_5_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-5.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-5/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_5_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-5.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Promosi Digital - Section 6
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-6/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_6_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-6.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-6/item-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_6_item_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-6.item-1.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-6/item-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_6_item_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-6.item-2.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-6/item-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_6_item_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-6.item-3.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-6/item-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_6_item_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-6.item-4.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-6/item-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_6_item_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-6.item-5.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Promosi Digital - Section 7
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-7/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_7_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-7.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-7/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_7_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-7.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-7/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_7_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-7.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Promosi Digital - Section 8
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-8/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_8_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-8.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-8/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_8_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-8.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-promosi-digital/section-8/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainPromosiDigitalController@section_8_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-promosi-digital.section-8.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Feed Instagram
    Route::get('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-feed-instagram', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainFeedInstagramController@index')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.index');

    //Visual Branding Design - Jasa Desain Grafis - Desain Feed Instagram - Section 1
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-feed-instagram/section-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainFeedInstagramController@section_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.section-1.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Feed Instagram - Section 2
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-feed-instagram/section-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainFeedInstagramController@section_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.section-2.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Feed Instagram - Section 3
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-feed-instagram/section-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainFeedInstagramController@section_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.section-3.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Feed Instagram - Section 4
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-feed-instagram/section-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainFeedInstagramController@section_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.section-4.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Feed Instagram - Section 5
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-feed-instagram/section-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainFeedInstagramController@section_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.section-5.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-feed-instagram/section-5/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainFeedInstagramController@section_5_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.section-5.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-feed-instagram/section-5/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainFeedInstagramController@section_5_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.section-5.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Feed Instagram - Section 6
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-feed-instagram/section-6/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainFeedInstagramController@section_6_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.section-6.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-feed-instagram/section-6/item/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainFeedInstagramController@section_6_item_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.section-6.item.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-feed-instagram/section-6/item/hapus', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainFeedInstagramController@section_6_item_hapus')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.section-6.item.hapus');

    //Visual Branding Design - Jasa Desain Grafis - Desain Feed Instagram - Section 7
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-feed-instagram/section-7/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainFeedInstagramController@section_7_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.section-7.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-feed-instagram/section-7/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainFeedInstagramController@section_7_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.section-7.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-feed-instagram/section-7/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainFeedInstagramController@section_7_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.section-7.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Feed Instagram - Section 8
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-feed-instagram/section-8/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainFeedInstagramController@section_8_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.section-8.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-feed-instagram/section-8/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainFeedInstagramController@section_8_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.section-8.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-feed-instagram/section-8/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainFeedInstagramController@section_8_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-feed-instagram.section-8.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Branding Kit
    Route::get('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-kit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingKitController@index')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.index');

    //Visual Branding Design - Jasa Desain Grafis - Desain Branding Kit - Section 1
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-kit/section-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingKitController@section_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.section-1.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Branding Kit - Section 2
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-kit/section-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingKitController@section_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.section-2.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Branding Kit - Section 3
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-kit/section-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingKitController@section_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.section-3.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Branding Kit - Section 4
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-kit/section-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingKitController@section_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.section-4.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Branding Kit - Section 5
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-kit/section-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingKitController@section_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.section-5.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-kit/section-5/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingKitController@section_5_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.section-5.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-kit/section-5/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingKitController@section_5_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.section-5.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Branding Kit - Section 6
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-kit/section-6/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingKitController@section_6_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.section-6.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-kit/section-6/item/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingKitController@section_6_item_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.section-6.item.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-kit/section-6/item/hapus', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingKitController@section_6_item_hapus')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.section-6.item.hapus');

    //Visual Branding Design - Jasa Desain Grafis - Desain Branding Kit - Section 7
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-kit/section-7/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingKitController@section_7_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.section-7.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-kit/section-7/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingKitController@section_7_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.section-7.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-kit/section-7/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingKitController@section_7_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.section-7.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Branding Kit - Section 8
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-kit/section-8/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingKitController@section_8_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.section-8.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-kit/section-8/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingKitController@section_8_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.section-8.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-kit/section-8/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingKitController@section_8_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-kit.section-8.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kartu Nama
    Route::get('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@index')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.index');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kartu Nama - Section 1
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-1.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kartu Nama - Section 2
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-2.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kartu Nama - Section 3
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-3.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kartu Nama - Section 4
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-4.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kartu Nama - Section 5
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-5.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-5/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_5_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-5.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-5/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_5_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-5.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kartu Nama - Section 6
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-6/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_6_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-6.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-6/item-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_6_item_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-6.item-1.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-6/item-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_6_item_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-6.item-2.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-6/item-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_6_item_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-6.item-3.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-6/item-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_6_item_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-6.item-4.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-6/item-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_6_item_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-6.item-5.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kartu Nama - Section 7
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-7/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_7_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-7.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-7/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_7_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-7.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-7/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_7_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-7.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kartu Nama - Section 8
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-8/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_8_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-8.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-8/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_8_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-8.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kartu-nama/section-8/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKartuNamaController@section_8_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kartu-nama.section-8.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Spanduk Banner
    Route::get('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@index')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.index');

    //Visual Branding Design - Jasa Desain Grafis - Desain Spanduk Banner - Section 1
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-1.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Spanduk Banner - Section 2
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-2.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Spanduk Banner - Section 3
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-3.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Spanduk Banner - Section 4
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-4.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Spanduk Banner - Section 5
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-5.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-5/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_5_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-5.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-5/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_5_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-5.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Spanduk Banner - Section 6
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-6/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_6_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-6.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-6/item-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_6_item_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-6.item-1.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-6/item-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_6_item_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-6.item-2.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-6/item-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_6_item_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-6.item-3.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-6/item-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_6_item_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-6.item-4.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-6/item-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_6_item_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-6.item-5.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Spanduk Banner - Section 7
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-7/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_7_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-7.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-7/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_7_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-7.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-7/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_7_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-7.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Spanduk Banner - Section 8
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-8/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_8_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-8.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-8/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_8_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-8.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner/section-8/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainSpandukBannerController@section_8_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-spanduk-banner.section-8.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Brosur
    Route::get('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@index')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.index');

    //Visual Branding Design - Jasa Desain Grafis - Desain Brosur - Section 1
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-1.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Brosur - Section 2
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-2.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Brosur - Section 3
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-3.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Brosur - Section 4
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-4.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Brosur - Section 5
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-5.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-5/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_5_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-5.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-5/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_5_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-5.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Brosur - Section 6
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-6/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_6_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-6.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-6/item-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_6_item_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-6.item-1.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-6/item-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_6_item_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-6.item-2.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-6/item-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_6_item_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-6.item-3.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-6/item-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_6_item_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-6.item-4.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-6/item-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_6_item_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-6.item-5.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Brosur - Section 7
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-7/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_7_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-7.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-7/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_7_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-7.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-7/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_7_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-7.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Brosur - Section 8
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-8/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_8_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-8.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-8/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_8_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-8.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-brosur/section-8/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrosurController@section_8_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-brosur.section-8.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kemasan
    Route::get('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@index')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.index');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kemasan - Section 1
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-1.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kemasan - Section 2
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-2.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kemasan - Section 3
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-3.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kemasan - Section 4
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-4.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kemasan - Section 5
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-5.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-5/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_5_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-5.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-5/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_5_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-5.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kemasan - Section 6
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-6/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_6_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-6.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-6/item-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_6_item_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-6.item-1.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-6/item-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_6_item_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-6.item-2.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-6/item-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_6_item_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-6.item-3.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-6/item-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_6_item_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-6.item-4.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-6/item-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_6_item_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-6.item-5.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kemasan - Section 7
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-7/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_7_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-7.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-7/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_7_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-7.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-7/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_7_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-7.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kemasan - Section 8
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-8/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_8_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-8.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-8/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_8_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-8.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kemasan/section-8/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKemasanController@section_8_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kemasan.section-8.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Label Produk
    Route::get('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@index')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.index');

    //Visual Branding Design - Jasa Desain Grafis - Desain Label Produk - Section 1
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-1.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Label Produk - Section 2
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-2.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Label Produk - Section 3
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-3.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Label Produk - Section 4
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-4.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Label Produk - Section 5
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-5.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-5/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_5_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-5.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-5/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_5_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-5.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Label Produk - Section 6
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-6/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_6_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-6.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-6/item-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_6_item_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-6.item-1.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-6/item-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_6_item_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-6.item-2.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-6/item-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_6_item_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-6.item-3.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-6/item-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_6_item_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-6.item-4.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-6/item-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_6_item_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-6.item-5.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Label Produk - Section 7
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-7/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_7_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-7.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-7/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_7_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-7.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-7/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_7_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-7.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Label Produk - Section 8
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-8/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_8_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-8.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-8/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_8_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-8.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-label-produk/section-8/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainLabelProdukController@section_8_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-label-produk.section-8.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Stempel
    Route::get('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@index')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.index');

    //Visual Branding Design - Jasa Desain Grafis - Desain Stempel - Section 1
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-1.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Stempel - Section 2
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-2.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Stempel - Section 3
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-3.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Stempel - Section 4
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-4.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Stempel - Section 5
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-5.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-5/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_5_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-5.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-5/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_5_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-5.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Stempel - Section 6
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-6/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_6_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-6.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-6/item-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_6_item_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-6.item-1.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-6/item-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_6_item_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-6.item-2.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-6/item-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_6_item_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-6.item-3.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-6/item-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_6_item_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-6.item-4.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-6/item-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_6_item_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-6.item-5.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Stempel - Section 7
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-7/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_7_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-7.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-7/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_7_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-7.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-7/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_7_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-7.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Stempel - Section 8
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-8/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_8_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-8.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-8/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_8_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-8.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-stempel/section-8/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainStempelController@section_8_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-stempel.section-8.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kalender
    Route::get('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kalender', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKalenderController@index')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kalender - Section 1
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kalender/section-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKalenderController@section_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.section-1.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kalender - Section 2
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kalender/section-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKalenderController@section_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.section-2.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kalender - Section 3
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kalender/section-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKalenderController@section_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.section-3.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kalender - Section 4
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kalender/section-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKalenderController@section_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.section-4.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kalender - Section 5
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kalender/section-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKalenderController@section_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.section-5.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kalender/section-5/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKalenderController@section_5_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.section-5.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kalender/section-5/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKalenderController@section_5_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.section-5.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kalender - Section 6
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kalender/section-6/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKalenderController@section_6_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.section-6.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kalender/section-6/item/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKalenderController@section_6_item_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.section-6.item.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kalender/section-6/item/hapus', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKalenderController@section_6_item_hapus')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.section-6.item.hapus');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kalender - Section 7
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kalender/section-7/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKalenderController@section_7_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.section-7.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kalender/section-7/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKalenderController@section_7_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.section-7.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kalender/section-7/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKalenderController@section_7_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.section-7.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kalender - Section 8
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kalender/section-8/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKalenderController@section_8_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.section-8.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kalender/section-8/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKalenderController@section_8_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.section-8.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kalender/section-8/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKalenderController@section_8_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.section-8.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Branding Event
    Route::get('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@index')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.index');

    //Visual Branding Design - Jasa Desain Grafis - Desain Branding Event - Section 1
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-1.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Branding Event - Section 2
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-2.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Branding Event - Section 3
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-3.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Branding Event - Section 4
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-4.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Branding Event - Section 5
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-5.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-5/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_5_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-5.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-5/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_5_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-5.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Branding Event - Section 6
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-6/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_6_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-6.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-6/item-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_6_item_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-6.item-1.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-6/item-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_6_item_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-6.item-2.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-6/item-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_6_item_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-6.item-3.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-6/item-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_6_item_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-6.item-4.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-6/item-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_6_item_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-6.item-5.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Branding Event - Section 7
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-7/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_7_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-7.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-7/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_7_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-7.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-7/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_7_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-7.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Branding Event - Section 8
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-8/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_8_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-8.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-8/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_8_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-8.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-branding-event/section-8/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainBrandingEventController@section_8_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-branding-event.section-8.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Amplop
    Route::get('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@index')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.index');

    //Visual Branding Design - Jasa Desain Grafis - Desain Amplop - Section 1
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-1.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Amplop - Section 2
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-2.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Amplop - Section 3
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-3.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Amplop - Section 4
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-4.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Amplop - Section 5
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-5.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-5/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_5_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-5.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-5/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_5_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-5.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Amplop - Section 6
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-6/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_6_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-6.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-6/item-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_6_item_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-6.item-1.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-6/item-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_6_item_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-6.item-2.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-6/item-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_6_item_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-6.item-3.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-6/item-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_6_item_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-6.item-4.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-6/item-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_6_item_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-6.item-5.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Amplop - Section 7
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-7/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_7_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-7.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-7/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_7_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-7.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-7/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_7_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-7.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Amplop - Section 8
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-8/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_8_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-8.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-8/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_8_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-8.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-amplop/section-8/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainAmplopController@section_8_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-amplop.section-8.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kop Surat
    Route::get('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@index')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.index');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kop Surat - Section 1
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-1.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kop Surat - Section 2
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-2.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kop Surat - Section 3
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-3.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kop Surat - Section 4
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-4.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kop Surat - Section 5
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-5.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-5/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_5_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-5.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-5/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_5_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-5.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kop Surat - Section 6
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-6/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_6_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-6.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-6/item-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_6_item_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-6.item-1.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-6/item-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_6_item_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-6.item-2.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-6/item-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_6_item_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-6.item-3.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-6/item-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_6_item_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-6.item-4.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-6/item-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_6_item_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-6.item-5.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kop Surat - Section 7
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-7/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_7_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-7.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-7/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_7_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-7.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-7/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_7_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-7.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain Kop Surat - Section 8
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-8/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_8_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-8.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-8/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_8_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-8.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-kop-surat/section-8/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainKopSuratController@section_8_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kop-surat.section-8.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain merchandise
    Route::get('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@index')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.index');

    //Visual Branding Design - Jasa Desain Grafis - Desain merchandise - Section 1
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-1.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain merchandise - Section 2
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-2.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain merchandise - Section 3
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-3.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain merchandise - Section 4
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-4.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain merchandise - Section 5
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-5.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-5/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_5_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-5.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-5/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_5_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-5.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain merchandise - Section 6
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-6/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_6_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-6.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-6/item-1/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_6_item_1_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-6.item-1.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-6/item-2/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_6_item_2_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-6.item-2.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-6/item-3/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_6_item_3_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-6.item-3.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-6/item-4/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_6_item_4_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-6.item-4.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-6/item-5/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_6_item_5_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-6.item-5.store');

    //Visual Branding Design - Jasa Desain Grafis - Desain merchandise - Section 7
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-7/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_7_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-7.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-7/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_7_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-7.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-7/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_7_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-7.hapus.satu');

    //Visual Branding Design - Jasa Desain Grafis - Desain merchandise - Section 8
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-8/store', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_8_store')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-8.store');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-8/edit', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_8_edit')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-8.edit');
    Route::post('/razen-studio/admin/visual-branding-design/jasa-desain-grafis/desain-merchandise/section-8/store/hapus/satu', 'RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis\DesainMerchandiseController@section_8_hapus_satu')->name('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-merchandise.section-8.hapus.satu');

    //Digital Campaign
    Route::get('/razen-studio/admin/digital-campaign/atur', 'RazenStudio\Admin\DigitalCampaign\AturController@index')->name('razen-studio.admin.digital-campaign.atur.index');
    Route::prefix('razen-studio')->group(function(){
        Route::prefix('admin')->group(function(){
            Route::prefix('digital-campaign')->group(function(){
                Route::prefix('data')->group(function(){
                    Route::prefix('testimoni')->group(function(){
                        Route::get('/', 'RazenStudio\Admin\DigitalCampaign\Data\TestimoniController@index')->name('razen-studio.admin.digital-campaign.data.testimoni.index');
                        Route::get('/create', 'RazenStudio\Admin\DigitalCampaign\Data\TestimoniController@create')->name('razen-studio.admin.digital-campaign.data.testimoni.create');
                        Route::get('/show/{id}', 'RazenStudio\Admin\DigitalCampaign\Data\TestimoniController@show')->name('razen-studio.admin.digital-campaign.data.testimoni.show');
                        Route::post('/','RazenStudio\Admin\DigitalCampaign\Data\TestimoniController@store')->name('razen-studio.admin.digital-campaign.data.testimoni.store');
                        Route::get('/edit/{id}','RazenStudio\Admin\DigitalCampaign\Data\TestimoniController@edit')->name('razen-studio.admin.digital-campaign.data.testimoni.edit');
                        Route::post('/update','RazenStudio\Admin\DigitalCampaign\Data\TestimoniController@update')->name('razen-studio.admin.digital-campaign.data.testimoni.update');
                        Route::get('/destroy/{id}','RazenStudio\Admin\DigitalCampaign\Data\TestimoniController@destroy')->name('razen-studio.admin.digital-campaign.data.testimoni.destroy');
                    });
                });
            });
        });
    });

    //Digital Campaign Section - 1
    Route::post('/razen-studio/admin/digital-campaign/atur/section-1/store', 'RazenStudio\Admin\DigitalCampaign\AturController@section_1_store')->name('razen-studio.admin.digital-campaign.atur.section-1.store');

    //Digital Campaign Section - 2
    Route::post('/razen-studio/admin/digital-campaign/atur/section-2/store', 'RazenStudio\Admin\DigitalCampaign\AturController@section_2_store')->name('razen-studio.admin.digital-campaign.atur.section-2.store');

    //Digital Campaign Section - 3
    Route::post('/razen-studio/admin/digital-campaign/atur/section-3/store', 'RazenStudio\Admin\DigitalCampaign\AturController@section_3_store')->name('razen-studio.admin.digital-campaign.atur.section-3.store');
    Route::post('/razen-studio/admin/digital-campaign/atur/section-3/edit', 'RazenStudio\Admin\DigitalCampaign\AturController@section_3_edit')->name('razen-studio.admin.digital-campaign.atur.section-3.edit');
    Route::post('/razen-studio/admin/digital-campaign/atur/section-3/store/hapus/satu', 'RazenStudio\Admin\DigitalCampaign\AturController@section_3_hapus_satu')->name('razen-studio.admin.digital-campaign.atur.section-3.hapus.satu');

    //Digital Campaign Section - 4
    Route::post('/razen-studio/admin/digital-campaign/atur/section-4/store', 'RazenStudio\Admin\DigitalCampaign\AturController@section_4_store')->name('razen-studio.admin.digital-campaign.atur.section-4.store');
    Route::post('/razen-studio/admin/digital-campaign/atur/section-4/edit', 'RazenStudio\Admin\DigitalCampaign\AturController@section_4_edit')->name('razen-studio.admin.digital-campaign.atur.section-4.edit');
    Route::post('/razen-studio/admin/digital-campaign/atur/section-4/store/hapus/satu', 'RazenStudio\Admin\DigitalCampaign\AturController@section_4_hapus_satu')->name('razen-studio.admin.digital-campaign.atur.section-4.hapus.satu');

    //Digital Campaign Section - 5
    Route::post('/razen-studio/admin/digital-campaign/atur/section-5/store', 'RazenStudio\Admin\DigitalCampaign\AturController@section_5_store')->name('razen-studio.admin.digital-campaign.atur.section-5.store');
    Route::post('/razen-studio/admin/digital-campaign/atur/section-5/edit', 'RazenStudio\Admin\DigitalCampaign\AturController@section_5_edit')->name('razen-studio.admin.digital-campaign.atur.section-5.edit');
    Route::post('/razen-studio/admin/digital-campaign/atur/section-5/store/hapus/satu', 'RazenStudio\Admin\DigitalCampaign\AturController@section_5_hapus_satu')->name('razen-studio.admin.digital-campaign.atur.section-5.hapus.satu');

    //Digital Campaign Section - Iklan Instagram
    Route::get('/razen-studio/admin/digital-campaign/iklan-instagram', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@index')->name('razen-studio.admin.digital-campaign.iklan-instagram.index');

    Route::prefix('razen-studio')->group(function(){
        Route::prefix('admin')->group(function(){
            Route::prefix('digital-campaign')->group(function(){
                Route::prefix('iklan-instagram')->group(function(){
                    Route::prefix('data')->group(function(){
                        Route::prefix('testimoni')->group(function(){
                            Route::get('/', 'RazenStudio\Admin\DigitalCampaign\IklanInstagram\Data\TestimoniController@index')->name('razen-studio.admin.digital-campaign.iklan-instagram.data.testimoni.index');
                            Route::get('/create', 'RazenStudio\Admin\DigitalCampaign\IklanInstagram\Data\TestimoniController@create')->name('razen-studio.admin.digital-campaign.iklan-instagram.data.testimoni.create');
                            Route::get('/show/{id}', 'RazenStudio\Admin\DigitalCampaign\IklanInstagram\Data\TestimoniController@show')->name('razen-studio.admin.digital-campaign.iklan-instagram.data.testimoni.show');
                            Route::post('/','RazenStudio\Admin\DigitalCampaign\IklanInstagram\Data\TestimoniController@store')->name('razen-studio.admin.digital-campaign.iklan-instagram.data.testimoni.store');
                            Route::get('/edit/{id}','RazenStudio\Admin\DigitalCampaign\IklanInstagram\Data\TestimoniController@edit')->name('razen-studio.admin.digital-campaign.iklan-instagram.data.testimoni.edit');
                            Route::post('/update','RazenStudio\Admin\DigitalCampaign\IklanInstagram\Data\TestimoniController@update')->name('razen-studio.admin.digital-campaign.iklan-instagram.data.testimoni.update');
                            Route::get('/destroy/{id}','RazenStudio\Admin\DigitalCampaign\IklanInstagram\Data\TestimoniController@destroy')->name('razen-studio.admin.digital-campaign.iklan-instagram.data.testimoni.destroy');
                        });
                    });
                });
            });
        });
    });

    //Digital Campaign Section - Iklan Instagram - Section 1
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-1/store', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_1_store')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-1.store');

    //Digital Campaign Section - Iklan Instagram - Section 2
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-2/store', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_2_store')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-2.store');

    //Digital Campaign Section - Iklan Instagram - Section 3
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-3/store', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_3_store')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-3.store');

    //Digital Campaign Section - Iklan Instagram - Section 4
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-4/store', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_4_store')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-4.store');

    //Digital Campaign Section - Iklan Instagram - Section 5
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-5/store', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_5_store')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-5.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-5/edit', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_5_edit')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-5.edit');
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-5/store/hapus/satu', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_5_hapus_satu')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-5.hapus.satu');

    //Digital Campaign Section - Iklan Instagram - Section 6
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-6/store', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_6_store')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-6.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-6/item-1/store', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_6_item_1_store')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-6.item-1.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-6/item-2/store', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_6_item_2_store')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-6.item-2.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-6/item-3/store', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_6_item_3_store')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-6.item-3.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-6/item-4/store', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_6_item_4_store')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-6.item-4.store');

    //Digital Campaign Section - Iklan Instagram - Section 7
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-7/store', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_7_store')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-7.store');

    //Digital Campaign Section - Iklan Instagram - Section 8
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-8/store', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_8_store')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-8.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-8/edit', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_8_edit')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-8.edit');
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-8/store/hapus/satu', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_8_hapus_satu')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-8.hapus.satu');

    //Digital Campaign Section - Iklan Instagram - Section 9
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-9/store', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_9_store')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-9.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-9/edit', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_9_edit')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-9.edit');
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-9/store/hapus/satu', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_9_hapus_satu')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-9.hapus.satu');

    //Digital Campaign Section - Iklan Instagram - Section 10
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-10/store', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_10_store')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-10.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-10/edit', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_10_edit')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-10.edit');
    Route::post('/razen-studio/admin/digital-campaign/iklan-instagram/section-10/store/hapus/satu', 'RazenStudio\Admin\DigitalCampaign\IklanInstagramController@section_10_hapus_satu')->name('razen-studio.admin.digital-campaign.iklan-instagram.section-10.hapus.satu');

    //Digital Campaign Section - Iklan Facebook
    Route::get('/razen-studio/admin/digital-campaign/iklan-facebook', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@index')->name('razen-studio.admin.digital-campaign.iklan-facebook.index');
    Route::prefix('razen-studio')->group(function(){
        Route::prefix('admin')->group(function(){
            Route::prefix('digital-campaign')->group(function(){
                Route::prefix('iklan-facebook')->group(function(){
                    Route::prefix('data')->group(function(){
                        Route::prefix('testimoni')->group(function(){
                            Route::get('/', 'RazenStudio\Admin\DigitalCampaign\IklanFacebook\Data\TestimoniController@index')->name('razen-studio.admin.digital-campaign.iklan-facebook.data.testimoni.index');
                            Route::get('/create', 'RazenStudio\Admin\DigitalCampaign\IklanFacebook\Data\TestimoniController@create')->name('razen-studio.admin.digital-campaign.iklan-facebook.data.testimoni.create');
                            Route::get('/show/{id}', 'RazenStudio\Admin\DigitalCampaign\IklanFacebook\Data\TestimoniController@show')->name('razen-studio.admin.digital-campaign.iklan-facebook.data.testimoni.show');
                            Route::post('/','RazenStudio\Admin\DigitalCampaign\IklanFacebook\Data\TestimoniController@store')->name('razen-studio.admin.digital-campaign.iklan-facebook.data.testimoni.store');
                            Route::get('/edit/{id}','RazenStudio\Admin\DigitalCampaign\IklanFacebook\Data\TestimoniController@edit')->name('razen-studio.admin.digital-campaign.iklan-facebook.data.testimoni.edit');
                            Route::post('/update','RazenStudio\Admin\DigitalCampaign\IklanFacebook\Data\TestimoniController@update')->name('razen-studio.admin.digital-campaign.iklan-facebook.data.testimoni.update');
                            Route::get('/destroy/{id}','RazenStudio\Admin\DigitalCampaign\IklanFacebook\Data\TestimoniController@destroy')->name('razen-studio.admin.digital-campaign.iklan-facebook.data.testimoni.destroy');
                        });
                    });
                });
            });
        });
    });

    //Digital Campaign Section - Iklan Facebook - Section 1
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-1/store', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_1_store')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-1.store');

    //Digital Campaign Section - Iklan Facebook - Section 2
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-2/store', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_2_store')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-2.store');

    //Digital Campaign Section - Iklan Facebook - Section 3
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-3/store', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_3_store')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-3.store');

    //Digital Campaign Section - Iklan Facebook - Section 4
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-4/store', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_4_store')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-4.store');

    //Digital Campaign Section - Iklan Facebook - Section 5
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-5/store', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_5_store')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-5.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-5/edit', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_5_edit')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-5.edit');
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-5/store/hapus/satu', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_5_hapus_satu')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-5.hapus.satu');

    //Digital Campaign Section - Iklan Facebook - Section 6
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-6/store', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_6_store')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-6.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-6/item-1/store', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_6_item_1_store')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-6.item-1.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-6/item-2/store', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_6_item_2_store')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-6.item-2.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-6/item-3/store', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_6_item_3_store')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-6.item-3.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-6/item-4/store', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_6_item_4_store')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-6.item-4.store');

    //Digital Campaign Section - Iklan Facebook - Section 7
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-7/store', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_7_store')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-7.store');

    //Digital Campaign Section - Iklan Facebook - Section 8
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-8/store', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_8_store')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-8.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-8/edit', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_8_edit')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-8.edit');
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-8/store/hapus/satu', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_8_hapus_satu')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-8.hapus.satu');

    //Digital Campaign Section - Iklan Facebook - Section 9
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-9/store', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_9_store')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-9.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-9/edit', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_9_edit')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-9.edit');
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-9/store/hapus/satu', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_9_hapus_satu')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-9.hapus.satu');

    //Digital Campaign Section - Iklan Facebook - Section 10
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-10/store', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_10_store')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-10.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-10/edit', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_10_edit')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-10.edit');
    Route::post('/razen-studio/admin/digital-campaign/iklan-facebook/section-10/store/hapus/satu', 'RazenStudio\Admin\DigitalCampaign\IklanFacebookController@section_10_hapus_satu')->name('razen-studio.admin.digital-campaign.iklan-facebook.section-10.hapus.satu');

    //Digital Campaign Section - Iklan Google
    Route::get('/razen-studio/admin/digital-campaign/iklan-google', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@index')->name('razen-studio.admin.digital-campaign.iklan-google.index');
    Route::prefix('razen-studio')->group(function(){
        Route::prefix('admin')->group(function(){
            Route::prefix('digital-campaign')->group(function(){
                Route::prefix('iklan-google')->group(function(){
                    Route::prefix('data')->group(function(){
                        Route::prefix('testimoni')->group(function(){
                            Route::get('/', 'RazenStudio\Admin\DigitalCampaign\IklanGoogle\Data\TestimoniController@index')->name('razen-studio.admin.digital-campaign.iklan-google.data.testimoni.index');
                            Route::get('/create', 'RazenStudio\Admin\DigitalCampaign\IklanGoogle\Data\TestimoniController@create')->name('razen-studio.admin.digital-campaign.iklan-google.data.testimoni.create');
                            Route::get('/show/{id}', 'RazenStudio\Admin\DigitalCampaign\IklanGoogle\Data\TestimoniController@show')->name('razen-studio.admin.digital-campaign.iklan-google.data.testimoni.show');
                            Route::post('/','RazenStudio\Admin\DigitalCampaign\IklanGoogle\Data\TestimoniController@store')->name('razen-studio.admin.digital-campaign.iklan-google.data.testimoni.store');
                            Route::get('/edit/{id}','RazenStudio\Admin\DigitalCampaign\IklanGoogle\Data\TestimoniController@edit')->name('razen-studio.admin.digital-campaign.iklan-google.data.testimoni.edit');
                            Route::post('/update','RazenStudio\Admin\DigitalCampaign\IklanGoogle\Data\TestimoniController@update')->name('razen-studio.admin.digital-campaign.iklan-google.data.testimoni.update');
                            Route::get('/destroy/{id}','RazenStudio\Admin\DigitalCampaign\IklanGoogle\Data\TestimoniController@destroy')->name('razen-studio.admin.digital-campaign.iklan-google.data.testimoni.destroy');
                        });
                    });
                });
            });
        });
    });

    //Digital Campaign Section - Iklan Google - Section 1
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-1/store', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_1_store')->name('razen-studio.admin.digital-campaign.iklan-google.section-1.store');

    //Digital Campaign Section - Iklan Google - Section 2
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-2/store', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_2_store')->name('razen-studio.admin.digital-campaign.iklan-google.section-2.store');

    //Digital Campaign Section - Iklan Google - Section 3
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-3/store', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_3_store')->name('razen-studio.admin.digital-campaign.iklan-google.section-3.store');

    //Digital Campaign Section - Iklan Google - Section 4
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-4/store', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_4_store')->name('razen-studio.admin.digital-campaign.iklan-google.section-4.store');

    //Digital Campaign Section - Iklan Google - Section 5
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-5/store', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_5_store')->name('razen-studio.admin.digital-campaign.iklan-google.section-5.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-5/edit', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_5_edit')->name('razen-studio.admin.digital-campaign.iklan-google.section-5.edit');
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-5/store/hapus/satu', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_5_hapus_satu')->name('razen-studio.admin.digital-campaign.iklan-google.section-5.hapus.satu');

    //Digital Campaign Section - Iklan Google - Section 6
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-6/store', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_6_store')->name('razen-studio.admin.digital-campaign.iklan-google.section-6.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-6/item-1/store', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_6_item_1_store')->name('razen-studio.admin.digital-campaign.iklan-google.section-6.item-1.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-6/item-2/store', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_6_item_2_store')->name('razen-studio.admin.digital-campaign.iklan-google.section-6.item-2.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-6/item-3/store', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_6_item_3_store')->name('razen-studio.admin.digital-campaign.iklan-google.section-6.item-3.store');

    //Digital Campaign Section - Iklan Google - Section 7
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-7/store', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_7_store')->name('razen-studio.admin.digital-campaign.iklan-google.section-7.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-7/item-1/store', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_7_item_1_store')->name('razen-studio.admin.digital-campaign.iklan-google.section-7.item-1.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-7/item-2/store', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_7_item_2_store')->name('razen-studio.admin.digital-campaign.iklan-google.section-7.item-2.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-7/item-3/store', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_7_item_3_store')->name('razen-studio.admin.digital-campaign.iklan-google.section-7.item-3.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-7/item-4/store', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_7_item_4_store')->name('razen-studio.admin.digital-campaign.iklan-google.section-7.item-4.store');

    //Digital Campaign Section - Iklan Google - Section 8
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-8/store', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_8_store')->name('razen-studio.admin.digital-campaign.iklan-google.section-8.store');

    //Digital Campaign Section - Iklan Google - Section 9
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-9/store', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_9_store')->name('razen-studio.admin.digital-campaign.iklan-google.section-9.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-9/edit', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_9_edit')->name('razen-studio.admin.digital-campaign.iklan-google.section-9.edit');
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-9/store/hapus/satu', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_9_hapus_satu')->name('razen-studio.admin.digital-campaign.iklan-google.section-9.hapus.satu');

    //Digital Campaign Section - Iklan Google - Section 10
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-10/store', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_10_store')->name('razen-studio.admin.digital-campaign.iklan-google.section-10.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-10/edit', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_10_edit')->name('razen-studio.admin.digital-campaign.iklan-google.section-10.edit');
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-10/store/hapus/satu', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_10_hapus_satu')->name('razen-studio.admin.digital-campaign.iklan-google.section-10.hapus.satu');

    //Digital Campaign Section - Iklan Google - Section 11
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-11/store', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_11_store')->name('razen-studio.admin.digital-campaign.iklan-google.section-11.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-11/edit', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_11_edit')->name('razen-studio.admin.digital-campaign.iklan-google.section-11.edit');
    Route::post('/razen-studio/admin/digital-campaign/iklan-google/section-11/store/hapus/satu', 'RazenStudio\Admin\DigitalCampaign\IklanGoogleController@section_11_hapus_satu')->name('razen-studio.admin.digital-campaign.iklan-google.section-11.hapus.satu');

    //Digital Campaign Section - Iklan Youtube
    Route::get('/razen-studio/admin/digital-campaign/iklan-youtube', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@index')->name('razen-studio.admin.digital-campaign.iklan-youtube.index');
    Route::prefix('razen-studio')->group(function(){
        Route::prefix('admin')->group(function(){
            Route::prefix('digital-campaign')->group(function(){
                Route::prefix('iklan-youtube')->group(function(){
                    Route::prefix('data')->group(function(){
                        Route::prefix('testimoni')->group(function(){
                            Route::get('/', 'RazenStudio\Admin\DigitalCampaign\IklanYoutube\Data\TestimoniController@index')->name('razen-studio.admin.digital-campaign.iklan-youtube.data.testimoni.index');
                            Route::get('/create', 'RazenStudio\Admin\DigitalCampaign\IklanYoutube\Data\TestimoniController@create')->name('razen-studio.admin.digital-campaign.iklan-youtube.data.testimoni.create');
                            Route::get('/show/{id}', 'RazenStudio\Admin\DigitalCampaign\IklanYoutube\Data\TestimoniController@show')->name('razen-studio.admin.digital-campaign.iklan-youtube.data.testimoni.show');
                            Route::post('/','RazenStudio\Admin\DigitalCampaign\IklanYoutube\Data\TestimoniController@store')->name('razen-studio.admin.digital-campaign.iklan-youtube.data.testimoni.store');
                            Route::get('/edit/{id}','RazenStudio\Admin\DigitalCampaign\IklanYoutube\Data\TestimoniController@edit')->name('razen-studio.admin.digital-campaign.iklan-youtube.data.testimoni.edit');
                            Route::post('/update','RazenStudio\Admin\DigitalCampaign\IklanYoutube\Data\TestimoniController@update')->name('razen-studio.admin.digital-campaign.iklan-youtube.data.testimoni.update');
                            Route::get('/destroy/{id}','RazenStudio\Admin\DigitalCampaign\IklanYoutube\Data\TestimoniController@destroy')->name('razen-studio.admin.digital-campaign.iklan-youtube.data.testimoni.destroy');
                        });
                    });
                });
            });
        });
    });

    //Digital Campaign Section - Iklan Youtube - Section 1
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-1/store', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_1_store')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-1.store');

    //Digital Campaign Section - Iklan Youtube - Section 2
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-2/store', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_2_store')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-2.store');

    //Digital Campaign Section - Iklan Youtube - Section 3
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-3/store', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_3_store')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-3.store');

    //Digital Campaign Section - Iklan Youtube - Section 4
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-4/store', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_4_store')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-4.store');

    //Digital Campaign Section - Iklan Youtube - Section 5
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-5/store', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_5_store')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-5.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-5/edit', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_5_edit')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-5.edit');
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-5/store/hapus/satu', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_5_hapus_satu')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-5.hapus.satu');

    //Digital Campaign Section - Iklan Youtube - Section 6
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-6/store', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_6_store')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-6.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-6/edit', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_6_edit')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-6.edit');
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-6/store/hapus/satu', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_6_hapus_satu')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-6.hapus.satu');

    //Digital Campaign Section - Iklan Youtube - Section 7
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-7/store', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_7_store')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-7.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-7/item-1/store', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_7_item_1_store')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-7.item-1.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-7/item-2/store', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_7_item_2_store')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-7.item-2.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-7/item-3/store', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_7_item_3_store')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-7.item-3.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-7/item-4/store', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_7_item_4_store')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-7.item-4.store');

    //Digital Campaign Section - Iklan Youtube - Section 8
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-8/store', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_8_store')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-8.store');

    //Digital Campaign Section - Iklan Youtube - Section 9
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-9/store', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_9_store')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-9.store');
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-9/edit', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_9_edit')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-9.edit');
    Route::post('/razen-studio/admin/digital-campaign/iklan-youtube/section-9/store/hapus/satu', 'RazenStudio\Admin\DigitalCampaign\IklanYoutubeController@section_9_hapus_satu')->name('razen-studio.admin.digital-campaign.iklan-youtube.section-9.hapus.satu');

    //Social Media Management
    Route::get('/razen-studio/admin/social-media-management/atur', 'RazenStudio\Admin\SocialMediaManagement\AturController@index')->name('razen-studio.admin.social-media-management.atur.index');

    Route::prefix('razen-studio')->group(function(){
        Route::prefix('admin')->group(function(){
            Route::prefix('social-media-management')->group(function(){
                Route::prefix('data')->group(function(){
                    Route::prefix('harga')->group(function(){
                        Route::get('/', 'RazenStudio\Admin\SocialMediaManagement\Data\HargaController@index')->name('razen-studio.admin.social-media-management.data.harga.index');
                        Route::get('/create', 'RazenStudio\Admin\SocialMediaManagement\Data\HargaController@create')->name('razen-studio.admin.social-media-management.data.harga.create');
                        Route::get('/show/{id}', 'RazenStudio\Admin\SocialMediaManagement\Data\HargaController@show')->name('razen-studio.admin.social-media-management.data.harga.show');
                        Route::post('/','RazenStudio\Admin\SocialMediaManagement\Data\HargaController@store')->name('razen-studio.admin.social-media-management.data.harga.store');
                        Route::get('/edit/{id}','RazenStudio\Admin\SocialMediaManagement\Data\HargaController@edit')->name('razen-studio.admin.social-media-management.data.harga.edit');
                        Route::post('/update/{id}','RazenStudio\Admin\SocialMediaManagement\Data\HargaController@update')->name('razen-studio.admin.social-media-management.data.harga.update');
                        Route::get('/destroy/{id}','RazenStudio\Admin\SocialMediaManagement\Data\HargaController@destroy')->name('razen-studio.admin.social-media-management.data.harga.destroy');
                    });

                    Route::prefix('testimoni')->group(function(){
                        Route::get('/', 'RazenStudio\Admin\SocialMediaManagement\Data\TestimoniController@index')->name('razen-studio.admin.social-media-management.data.testimoni.index');
                        Route::get('/create', 'RazenStudio\Admin\SocialMediaManagement\Data\TestimoniController@create')->name('razen-studio.admin.social-media-management.data.testimoni.create');
                        Route::get('/show/{id}', 'RazenStudio\Admin\SocialMediaManagement\Data\TestimoniController@show')->name('razen-studio.admin.social-media-management.data.testimoni.show');
                        Route::post('/','RazenStudio\Admin\SocialMediaManagement\Data\TestimoniController@store')->name('razen-studio.admin.social-media-management.data.testimoni.store');
                        Route::get('/edit/{id}','RazenStudio\Admin\SocialMediaManagement\Data\TestimoniController@edit')->name('razen-studio.admin.social-media-management.data.testimoni.edit');
                        Route::post('/update','RazenStudio\Admin\SocialMediaManagement\Data\TestimoniController@update')->name('razen-studio.admin.social-media-management.data.testimoni.update');
                        Route::get('/destroy/{id}','RazenStudio\Admin\SocialMediaManagement\Data\TestimoniController@destroy')->name('razen-studio.admin.social-media-management.data.testimoni.destroy');
                    });
                });
            });
        });
    });

    //Social Media Management - Section - 1
    Route::post('/razen-studio/admin/social-media-management/atur/section-1/store', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_1_store')->name('razen-studio.admin.social-media-management.atur.section-1.store');

    //Social Media Management - Section - 2
    Route::post('/razen-studio/admin/social-media-management/atur/section-2/store', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_2_store')->name('razen-studio.admin.social-media-management.atur.section-2.store');

    //Social Media Management - Section 3
    Route::post('/razen-studio/admin/social-media-management/atur/section-3/store', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_3_store')->name('razen-studio.admin.social-media-management.atur.section-3.store');
    Route::post('/razen-studio/admin/social-media-management/atur/section-3/item-1/store', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_3_item_1_store')->name('razen-studio.admin.social-media-management.atur.section-3.item-1.store');
    Route::post('/razen-studio/admin/social-media-management/atur/section-3/item-2/store', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_3_item_2_store')->name('razen-studio.admin.social-media-management.atur.section-3.item-2.store');
    Route::post('/razen-studio/admin/social-media-management/atur/section-3/item-3/store', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_3_item_3_store')->name('razen-studio.admin.social-media-management.atur.section-3.item-3.store');
    Route::post('/razen-studio/admin/social-media-management/atur/section-3/item-4/store', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_3_item_4_store')->name('razen-studio.admin.social-media-management.atur.section-3.item-4.store');

    //Social Media Management - Section 4 Start
    Route::post('/razen-studio/admin/social-media-management/atur/section-4/store', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_4_store')->name('razen-studio.admin.social-media-management.atur.section-4.store');
    Route::post('/razen-studio/admin/social-media-management/atur/section-4/store/hapus/satu', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_4_hapus_satu')->name('razen-studio.admin.social-media-management.atur.section-4.hapus.satu');
    //Social Media Management - Section 4 End

    //Social Media Management - Section - 5
    Route::post('/razen-studio/admin/social-media-management/atur/section-5/store', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_5_store')->name('razen-studio.admin.social-media-management.atur.section-5.store');

    //Social Media Management - Section - 6
    Route::post('/razen-studio/admin/social-media-management/atur/section-6/store', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_6_store')->name('razen-studio.admin.social-media-management.atur.section-6.store');

    //Social Media Management - Section - 7
    Route::post('/razen-studio/admin/social-media-management/atur/section-7/store', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_7_store')->name('razen-studio.admin.social-media-management.atur.section-7.store');

    //Social Media Management - Section - 8
    Route::post('/razen-studio/admin/social-media-management/atur/section-8/store', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_8_store')->name('razen-studio.admin.social-media-management.atur.section-8.store');
    Route::post('/razen-studio/admin/social-media-management/atur/section-8/edit', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_8_edit')->name('razen-studio.admin.social-media-management.atur.section-8.edit');
    Route::post('/razen-studio/admin/social-media-management/atur/section-8/store/hapus/satu', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_8_hapus_satu')->name('razen-studio.admin.social-media-management.atur.section-8.hapus.satu');

    //Social Media Management - Section - 9
    Route::post('/razen-studio/admin/social-media-management/atur/section-9/store', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_9_store')->name('razen-studio.admin.social-media-management.atur.section-9.store');
    Route::post('/razen-studio/admin/social-media-management/atur/section-9/edit', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_9_edit')->name('razen-studio.admin.social-media-management.atur.section-9.edit');
    Route::post('/razen-studio/admin/social-media-management/atur/section-9/store/hapus/satu', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_9_hapus_satu')->name('razen-studio.admin.social-media-management.atur.section-9.hapus.satu');

    //Social Media Management - Section - 10
    Route::post('/razen-studio/admin/social-media-management/atur/section-10/store', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_10_store')->name('razen-studio.admin.social-media-management.atur.section-10.store');
    Route::post('/razen-studio/admin/social-media-management/atur/section-10/edit', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_10_edit')->name('razen-studio.admin.social-media-management.atur.section-10.edit');
    Route::post('/razen-studio/admin/social-media-management/atur/section-10/store/hapus/satu', 'RazenStudio\Admin\SocialMediaManagement\AturController@section_10_hapus_satu')->name('razen-studio.admin.social-media-management.atur.section-10.hapus.satu');

    //Search Engine Optimization
    Route::get('/razen-studio/admin/search-engine-optimization/atur', 'RazenStudio\Admin\SearchEngineOptimization\AturController@index')->name('razen-studio.admin.search-engine-optimization.atur.index');

    Route::prefix('razen-studio')->group(function(){
        Route::prefix('admin')->group(function(){
            Route::prefix('search-engine-optimization')->group(function(){
                Route::prefix('data')->group(function(){
                    Route::prefix('testimoni')->group(function(){
                        Route::get('/', 'RazenStudio\Admin\SearchEngineOptimization\Data\TestimoniController@index')->name('razen-studio.admin.search-engine-optimization.data.testimoni.index');
                        Route::get('/create', 'RazenStudio\Admin\SearchEngineOptimization\Data\TestimoniController@create')->name('razen-studio.admin.search-engine-optimization.data.testimoni.create');
                        Route::get('/show/{id}', 'RazenStudio\Admin\SearchEngineOptimization\Data\TestimoniController@show')->name('razen-studio.admin.search-engine-optimization.data.testimoni.show');
                        Route::post('/','RazenStudio\Admin\SearchEngineOptimization\Data\TestimoniController@store')->name('razen-studio.admin.search-engine-optimization.data.testimoni.store');
                        Route::get('/edit/{id}','RazenStudio\Admin\SearchEngineOptimization\Data\TestimoniController@edit')->name('razen-studio.admin.search-engine-optimization.data.testimoni.edit');
                        Route::post('/update','RazenStudio\Admin\SearchEngineOptimization\Data\TestimoniController@update')->name('razen-studio.admin.search-engine-optimization.data.testimoni.update');
                        Route::get('/destroy/{id}','RazenStudio\Admin\SearchEngineOptimization\Data\TestimoniController@destroy')->name('razen-studio.admin.search-engine-optimization.data.testimoni.destroy');
                    });
                });
            });
        });
    });

    //Search Engine Optimization - Section 1
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-1/store', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_1_store')->name('razen-studio.admin.search-engine-optimization.atur.section-1.store');

    //Search Engine Optimization - Section 2
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-2/store', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_2_store')->name('razen-studio.admin.search-engine-optimization.atur.section-2.store');
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-2/edit', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_2_edit')->name('razen-studio.admin.search-engine-optimization.atur.section-2.edit');
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-2/store/hapus/satu', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_2_hapus_satu')->name('razen-studio.admin.search-engine-optimization.atur.section-2.hapus.satu');

    //Search Engine Optimization - Item
    Route::post('/razen-studio/admin/search-engine-optimization/atur/item/store', 'RazenStudio\Admin\SearchEngineOptimization\AturController@item_store')->name('razen-studio.admin.search-engine-optimization.atur.item.store');
    Route::post('/razen-studio/admin/search-engine-optimization/atur/item/store/hapus/satu', 'RazenStudio\Admin\SearchEngineOptimization\AturController@item_hapus_satu')->name('razen-studio.admin.search-engine-optimization.atur.item.hapus.satu');
    //Search Engine Optimization - Item

    //Search Engine Optimization - Section 3
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-3/store', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_3_store')->name('razen-studio.admin.search-engine-optimization.atur.section-3.store');
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-3/item-1/store', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_3_item_1_store')->name('razen-studio.admin.search-engine-optimization.atur.section-3.item-1.store');
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-3/item-2/store', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_3_item_2_store')->name('razen-studio.admin.search-engine-optimization.atur.section-3.item-2.store');
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-3/item-3/store', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_3_item_3_store')->name('razen-studio.admin.search-engine-optimization.atur.section-3.item-3.store');
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-3/item-4/store', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_3_item_4_store')->name('razen-studio.admin.search-engine-optimization.atur.section-3.item-4.store');
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-3/item-5/store', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_3_item_5_store')->name('razen-studio.admin.search-engine-optimization.atur.section-3.item-5.store');

    //Search Engine Optimization - Section 4
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-4/store', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_4_store')->name('razen-studio.admin.search-engine-optimization.atur.section-4.store');
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-4/edit', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_4_edit')->name('razen-studio.admin.search-engine-optimization.atur.section-4.edit');
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-4/store/hapus/satu', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_4_hapus_satu')->name('razen-studio.admin.search-engine-optimization.atur.section-4.hapus.satu');

    //Search Engine Optimization - Section 5
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-5/store', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_5_store')->name('razen-studio.admin.search-engine-optimization.atur.section-5.store');
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-5/edit', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_5_edit')->name('razen-studio.admin.search-engine-optimization.atur.section-5.edit');
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-5/store/hapus/satu', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_5_hapus_satu')->name('razen-studio.admin.search-engine-optimization.atur.section-5.hapus.satu');

    //Search Engine Optimization - Section 6
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-6/store', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_6_store')->name('razen-studio.admin.search-engine-optimization.atur.section-6.store');

    //Search Engine Optimization - Section 7
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-7/store', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_7_store')->name('razen-studio.admin.search-engine-optimization.atur.section-7.store');
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-7/edit', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_7_edit')->name('razen-studio.admin.search-engine-optimization.atur.section-7.edit');
    Route::post('/razen-studio/admin/search-engine-optimization/atur/section-7/store/hapus/satu', 'RazenStudio\Admin\SearchEngineOptimization\AturController@section_7_hapus_satu')->name('razen-studio.admin.search-engine-optimization.atur.section-7.hapus.satu');

    //About
    Route::get('/razen-studio/admin/about/atur', 'RazenStudio\Admin\About\AturController@index')->name('razen-studio.admin.about.atur.index');

    //About - Section 1
    Route::post('/razen-studio/admin/about/atur/section-1/store', 'RazenStudio\Admin\About\AturController@section_1_store')->name('razen-studio.admin.about.atur.section-1.store');

    //About - Section 2 Start
    Route::post('/razen-studio/admin/about/atur/section-2/store', 'RazenStudio\Admin\About\AturController@section_2_store')->name('razen-studio.admin.about.atur.section-2.store');
    Route::post('/razen-studio/admin/about/atur/section-2/store/hapus/satu', 'RazenStudio\Admin\About\AturController@section_2_hapus_satu')->name('razen-studio.admin.about.atur.section-2.hapus.satu');
    //About - Section 2 End

    //About - Section 3
    Route::post('/razen-studio/admin/about/atur/section-3/store', 'RazenStudio\Admin\About\AturController@section_3_store')->name('razen-studio.admin.about.atur.section-3.store');

    //About - Section 4
    Route::post('/razen-studio/admin/about/atur/section-4/store', 'RazenStudio\Admin\About\AturController@section_4_store')->name('razen-studio.admin.about.atur.section-4.store');

    //About - Section - 5
    Route::post('/razen-studio/admin/about/atur/section-5/store', 'RazenStudio\Admin\About\AturController@section_5_store')->name('razen-studio.admin.about.atur.section-5.store');
    Route::post('/razen-studio/admin/about/atur/section-5/edit', 'RazenStudio\Admin\About\AturController@section_5_edit')->name('razen-studio.admin.about.atur.section-5.edit');
    Route::post('/razen-studio/admin/about/atur/section-5/store/hapus/satu', 'RazenStudio\Admin\About\AturController@section_5_hapus_satu')->name('razen-studio.admin.about.atur.section-5.hapus.satu');

    //About - Section 6
    Route::post('/razen-studio/admin/about/atur/section-6/store', 'RazenStudio\Admin\About\AturController@section_6_store')->name('razen-studio.admin.about.atur.section-6.store');

    //About - Section 7
    Route::post('/razen-studio/admin/about/atur/section-7/store', 'RazenStudio\Admin\About\AturController@section_7_store')->name('razen-studio.admin.about.atur.section-7.store');

    //About Gallery
    Route::get('/razen-studio/admin/about/gallery', 'RazenStudio\Admin\About\GalleryController@index')->name('razen-studio.admin.about.gallery.index');
    Route::post('/razen-studio/admin/about/gallery', 'RazenStudio\Admin\About\GalleryController@store')->name('razen-studio.admin.about.gallery.store');
    Route::post('/razen-studio/admin/about/gallery/hapus-data', 'RazenStudio\Admin\About\GalleryController@hapus_data')->name('razen-studio.admin.about.gallery.hapus-data');

    //How It Works
    Route::get('/razen-studio/admin/how-it-works/atur', 'RazenStudio\Admin\HowItWork\AturController@index')->name('razen-studio.admin.how-it-works.atur.index');

    //How It Works - Section 1
    Route::post('/razen-studio/admin/how-it-works/atur/section-1/store', 'RazenStudio\Admin\HowItWork\AturController@section_1_store')->name('razen-studio.admin.how-it-works.atur.section-1.store');

    //How It Works - Section 2
    Route::post('/razen-studio/admin/how-it-works/atur/section-2/store', 'RazenStudio\Admin\HowItWork\AturController@section_2_store')->name('razen-studio.admin.how-it-works.atur.section-2.store');
    Route::post('/razen-studio/admin/how-it-works/atur/section-2/edit', 'RazenStudio\Admin\HowItWork\AturController@section_2_edit')->name('razen-studio.admin.how-it-works.atur.section-2.edit');
    Route::post('/razen-studio/admin/how-it-works/atur/section-2/store/hapus/satu', 'RazenStudio\Admin\HowItWork\AturController@section_2_hapus_satu')->name('razen-studio.admin.how-it-works.atur.section-2.hapus.satu');

    //How It Works - Section 3
    Route::post('/razen-studio/admin/how-it-works/atur/section-3/store', 'RazenStudio\Admin\HowItWork\AturController@section_3_store')->name('razen-studio.admin.how-it-works.atur.section-3.store');
    Route::post('/razen-studio/admin/how-it-works/atur/section-3/item-1/store', 'RazenStudio\Admin\HowItWork\AturController@section_3_item_1_store')->name('razen-studio.admin.how-it-works.atur.section-3.item-1.store');
    Route::post('/razen-studio/admin/how-it-works/atur/section-3/item-2/store', 'RazenStudio\Admin\HowItWork\AturController@section_3_item_2_store')->name('razen-studio.admin.how-it-works.atur.section-3.item-2.store');
    Route::post('/razen-studio/admin/how-it-works/atur/section-3/item-3/store', 'RazenStudio\Admin\HowItWork\AturController@section_3_item_3_store')->name('razen-studio.admin.how-it-works.atur.section-3.item-3.store');
    Route::post('/razen-studio/admin/how-it-works/atur/section-3/item-4/store', 'RazenStudio\Admin\HowItWork\AturController@section_3_item_4_store')->name('razen-studio.admin.how-it-works.atur.section-3.item-4.store');

    //How It Works - Section 4
    Route::post('/razen-studio/admin/how-it-works/atur/section-4/store', 'RazenStudio\Admin\HowItWork\AturController@section_4_store')->name('razen-studio.admin.how-it-works.atur.section-4.store');

    //How It Works - Section 5
    Route::post('/razen-studio/admin/how-it-works/atur/section-5/store', 'RazenStudio\Admin\HowItWork\AturController@section_5_store')->name('razen-studio.admin.how-it-works.atur.section-5.store');

    //How It Works - Section 6
    Route::post('/razen-studio/admin/how-it-works/atur/section-6/store', 'RazenStudio\Admin\HowItWork\AturController@section_6_store')->name('razen-studio.admin.how-it-works.atur.section-6.store');
    Route::post('/razen-studio/admin/how-it-works/atur/section-6/item-1/store', 'RazenStudio\Admin\HowItWork\AturController@section_6_item_1_store')->name('razen-studio.admin.how-it-works.atur.section-6.item-1.store');
    Route::post('/razen-studio/admin/how-it-works/atur/section-6/item-1/edit', 'RazenStudio\Admin\HowItWork\AturController@section_6_item_1_edit')->name('razen-studio.admin.how-it-works.atur.section-6.item-1.edit');
    Route::post('/razen-studio/admin/how-it-works/atur/section-6/item-1/store/hapus/satu', 'RazenStudio\Admin\HowItWork\AturController@section_6_item_1_hapus_satu')->name('razen-studio.admin.how-it-works.atur.section-6.item-1.hapus.satu');
    Route::post('/razen-studio/admin/how-it-works/atur/section-6/item-2/store', 'RazenStudio\Admin\HowItWork\AturController@section_6_item_2_store')->name('razen-studio.admin.how-it-works.atur.section-6.item-2.store');

    //Portofolio
    Route::get('/razen-studio/admin/portofolio/atur', 'RazenStudio\Admin\Portofolio\AturController@index')->name('razen-studio.admin.portofolio.atur.index');

    //Portofolio - Section 1
    Route::post('/razen-studio/admin/portofolio/atur/section-1/store', 'RazenStudio\Admin\Portofolio\AturController@section_1_store')->name('razen-studio.admin.portofolio.atur.section-1.store');

    //Portofolio - Section 2
    Route::post('/razen-studio/admin/portofolio/atur/section-2/store', 'RazenStudio\Admin\Portofolio\AturController@section_2_store')->name('razen-studio.admin.portofolio.atur.section-2.store');

    //Why Razen Studio
    Route::get('/razen-studio/admin/why-razen-studio/atur', 'RazenStudio\Admin\WhyRazenStudio\AturController@index')->name('razen-studio.admin.why-razen-studio.atur.index');

    //Why Razen Studio - Section 1
    Route::post('/razen-studio/admin/why-razen-studio/atur/section-1/store', 'RazenStudio\Admin\WhyRazenStudio\AturController@section_1_store')->name('razen-studio.admin.why-razen-studio.atur.section-1.store');

    //Why Razen Studio - Section 2
    Route::post('/razen-studio/admin/why-razen-studio/atur/section-2/store', 'RazenStudio\Admin\WhyRazenStudio\AturController@section_2_store')->name('razen-studio.admin.why-razen-studio.atur.section-2.store');

    //Why Razen Studio - Section 3
    Route::post('/razen-studio/admin/why-razen-studio/atur/section-3/store', 'RazenStudio\Admin\WhyRazenStudio\AturController@section_3_store')->name('razen-studio.admin.why-razen-studio.atur.section-3.store');

    //Why Razen Studio - Section 4
    Route::post('/razen-studio/admin/why-razen-studio/atur/section-4/store', 'RazenStudio\Admin\WhyRazenStudio\AturController@section_4_store')->name('razen-studio.admin.why-razen-studio.atur.section-4.store');

    //Why Razen Studio - Section 5
    Route::post('/razen-studio/admin/why-razen-studio/atur/section-5/store', 'RazenStudio\Admin\WhyRazenStudio\AturController@section_5_store')->name('razen-studio.admin.why-razen-studio.atur.section-5.store');
    Route::post('/razen-studio/admin/why-razen-studio/atur/section-5/edit', 'RazenStudio\Admin\WhyRazenStudio\AturController@section_5_edit')->name('razen-studio.admin.why-razen-studio.atur.section-5.edit');
    Route::post('/razen-studio/admin/why-razen-studio/atur/section-5/store/hapus/satu', 'RazenStudio\Admin\WhyRazenStudio\AturController@section_5_hapus_satu')->name('razen-studio.admin.why-razen-studio.atur.section-5.hapus.satu');

    //Why Razen Studio - Section 6
    Route::post('/razen-studio/admin/why-razen-studio/atur/section-6/store', 'RazenStudio\Admin\WhyRazenStudio\AturController@section_6_store')->name('razen-studio.admin.why-razen-studio.atur.section-6.store');
    Route::post('/razen-studio/admin/why-razen-studio/atur/section-6/item-1/store', 'RazenStudio\Admin\WhyRazenStudio\AturController@section_6_item_1_store')->name('razen-studio.admin.why-razen-studio.atur.section-6.item-1.store');
    Route::post('/razen-studio/admin/why-razen-studio/atur/section-6/item-2/store', 'RazenStudio\Admin\WhyRazenStudio\AturController@section_6_item_2_store')->name('razen-studio.admin.why-razen-studio.atur.section-6.item-2.store');
    Route::post('/razen-studio/admin/why-razen-studio/atur/section-6/item-3/store', 'RazenStudio\Admin\WhyRazenStudio\AturController@section_6_item_3_store')->name('razen-studio.admin.why-razen-studio.atur.section-6.item-3.store');

    //Freelancer Agency
    Route::get('/razen-studio/admin/freelancer-agency/atur', 'RazenStudio\Admin\FreelancerAgency\AturController@index')->name('razen-studio.admin.freelancer-agency.atur.index');

    //Freelancer Agency - Section 1
    Route::post('/razen-studio/admin/freelancer-agency/atur/section-1/store', 'RazenStudio\Admin\FreelancerAgency\AturController@section_1_store')->name('razen-studio.admin.freelancer-agency.atur.section-1.store');

    //Freelancer Agency - Section 2
    Route::post('/razen-studio/admin/freelancer-agency/atur/section-2/store', 'RazenStudio\Admin\FreelancerAgency\AturController@section_2_store')->name('razen-studio.admin.freelancer-agency.atur.section-2.store');

    //Freelancer Agency - Section 3
    Route::post('/razen-studio/admin/freelancer-agency/atur/section-3/store', 'RazenStudio\Admin\FreelancerAgency\AturController@section_3_store')->name('razen-studio.admin.freelancer-agency.atur.section-3.store');

    //Freelancer Agency - Section 4
    Route::post('/razen-studio/admin/freelancer-agency/atur/section-4/store', 'RazenStudio\Admin\FreelancerAgency\AturController@section_4_store')->name('razen-studio.admin.freelancer-agency.atur.section-4.store');
    Route::post('/razen-studio/admin/freelancer-agency/atur/section-4/edit', 'RazenStudio\Admin\FreelancerAgency\AturController@section_4_edit')->name('razen-studio.admin.freelancer-agency.atur.section-4.edit');
    Route::post('/razen-studio/admin/freelancer-agency/atur/section-4/store/hapus/satu', 'RazenStudio\Admin\FreelancerAgency\AturController@section_4_hapus_satu')->name('razen-studio.admin.freelancer-agency.atur.section-4.hapus.satu');

    //Freelancer Agency - Section 5
    Route::post('/razen-studio/admin/freelancer-agency/atur/section-5/store', 'RazenStudio\Admin\FreelancerAgency\AturController@section_5_store')->name('razen-studio.admin.freelancer-agency.atur.section-5.store');
    Route::post('/razen-studio/admin/freelancer-agency/atur/section-5/edit', 'RazenStudio\Admin\FreelancerAgency\AturController@section_5_edit')->name('razen-studio.admin.freelancer-agency.atur.section-5.edit');
    Route::post('/razen-studio/admin/freelancer-agency/atur/section-5/store/hapus/satu', 'RazenStudio\Admin\FreelancerAgency\AturController@section_5_hapus_satu')->name('razen-studio.admin.freelancer-agency.atur.section-5.hapus.satu');

    //Freelancer Agency - Section 6
    Route::post('/razen-studio/admin/freelancer-agency/atur/section-6/store', 'RazenStudio\Admin\FreelancerAgency\AturController@section_6_store')->name('razen-studio.admin.freelancer-agency.atur.section-6.store');

    //Freelancer Agency - Section 7
    Route::post('/razen-studio/admin/freelancer-agency/atur/section-7/store', 'RazenStudio\Admin\FreelancerAgency\AturController@section_7_store')->name('razen-studio.admin.freelancer-agency.atur.section-7.store');
    Route::post('/razen-studio/admin/freelancer-agency/atur/section-7/edit', 'RazenStudio\Admin\FreelancerAgency\AturController@section_7_edit')->name('razen-studio.admin.freelancer-agency.atur.section-7.edit');
    Route::post('/razen-studio/admin/freelancer-agency/atur/section-7/store/hapus/satu', 'RazenStudio\Admin\FreelancerAgency\AturController@section_7_hapus_satu')->name('razen-studio.admin.freelancer-agency.atur.section-7.hapus.satu');

    //Contact
    Route::get('/razen-studio/admin/contact/atur', 'RazenStudio\Admin\Contact\AturController@index')->name('razen-studio.admin.contact.atur.index');

    //Contact - Section 1
    Route::post('/razen-studio/admin/contact/atur/section-1/store', 'RazenStudio\Admin\Contact\AturController@section_1_store')->name('razen-studio.admin.contact.atur.section-1.store');

    //Contact - Section 2 Start
    Route::post('/razen-studio/admin/contact/atur/section-2/store', 'RazenStudio\Admin\Contact\AturController@section_2_store')->name('razen-studio.admin.contact.atur.section-2.store');
    Route::post('/razen-studio/admin/contact/atur/section-2/store/hapus/satu', 'RazenStudio\Admin\Contact\AturController@section_2_hapus_satu')->name('razen-studio.admin.contact.atur.section-2.hapus.satu');
    //Contact - Section 2 End

    //Contact - Section 3
    Route::post('/razen-studio/admin/contact/atur/section-3/store', 'RazenStudio\Admin\Contact\AturController@section_3_store')->name('razen-studio.admin.contact.atur.section-3.store');

    Route::post('/razen-studio/admin/contact/atur/section-3/konsultasi/store', 'RazenStudio\Admin\Contact\AturController@section_3_konsultasi_store')->name('razen-studio.admin.contact.atur.section-3.konsultasi.store');

    Route::post('/razen-studio/admin/contact/atur/section-3/office/store', 'RazenStudio\Admin\Contact\AturController@section_3_office_store')->name('razen-studio.admin.contact.atur.section-3.office.store');
    Route::post('/razen-studio/admin/contact/atur/section-3/office/edit', 'RazenStudio\Admin\Contact\AturController@section_3_office_edit')->name('razen-studio.admin.contact.atur.section-3.office.edit');
    Route::post('/razen-studio/admin/contact/atur/section-3/office/store/hapus/satu', 'RazenStudio\Admin\Contact\AturController@section_3_office_hapus_satu')->name('razen-studio.admin.contact.atur.section-3.office.hapus.satu');

    Route::post('/razen-studio/admin/contact/atur/section-3/studio-learning-center/store', 'RazenStudio\Admin\Contact\AturController@section_3_studio_learning_center_store')->name('razen-studio.admin.contact.atur.section-3.studio-learning-center.store');
    Route::post('/razen-studio/admin/contact/atur/section-3/studio-learning-center/edit', 'RazenStudio\Admin\Contact\AturController@section_3_studio_learning_center_edit')->name('razen-studio.admin.contact.atur.section-3.studio-learning-center.edit');
    Route::post('/razen-studio/admin/contact/atur/section-3/studio-learning-center/store/hapus/satu', 'RazenStudio\Admin\Contact\AturController@section_3_studio_learning_center_hapus_satu')->name('razen-studio.admin.contact.atur.section-3.studio-learning-center.hapus.satu');

    //Contact - Section 4
    Route::post('/razen-studio/admin/contact/atur/section-4/store', 'RazenStudio\Admin\Contact\AturController@section_4_store')->name('razen-studio.admin.contact.atur.section-4.store');

    Route::prefix('razen-studio')->group(function(){
        Route::prefix('admin')->group(function(){
            Route::prefix('profil')->group(function(){
                Route::get('/', 'RazenStudio\Admin\ProfilController@index')->name('razen-studio.admin.profil.index');
                Route::post('/', 'RazenStudio\Admin\ProfilController@store')->name('razen-studio.admin.profil.store');
            });

            Route::prefix('portofolio-web')->group(function(){
                Route::get('/', 'RazenStudio\Admin\PortofolioWebController@index')->name('razen-studio.admin.portofolio-web.index');
                Route::get('/create', 'RazenStudio\Admin\PortofolioWebController@create')->name('razen-studio.admin.portofolio-web.create');
                Route::get('/show/{id}', 'RazenStudio\Admin\PortofolioWebController@show')->name('razen-studio.admin.portofolio-web.show');
                Route::post('/','RazenStudio\Admin\PortofolioWebController@store')->name('razen-studio.admin.portofolio-web.store');
                Route::get('/edit/{id}','RazenStudio\Admin\PortofolioWebController@edit')->name('razen-studio.admin.portofolio-web.edit');
                Route::post('/update','RazenStudio\Admin\PortofolioWebController@update')->name('razen-studio.admin.portofolio-web.update');
                Route::get('/destroy/{id}','RazenStudio\Admin\PortofolioWebController@destroy')->name('razen-studio.admin.portofolio-web.destroy');
            });
        });
    });
});
