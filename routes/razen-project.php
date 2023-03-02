<?php

Route::group(['middleware' => 'auth:razen_project,razen'], function(){
    Route::prefix('razen-project')->group(function(){
        Route::prefix('dashboard')->group(function(){
            Route::get('/', 'RazenProject\Admin\DashboardController@index')->name('razen-project.admin.dashboard.index');
            Route::post('/change', 'RazenProject\Admin\DashboardController@change')->name('razen-project.admin.dashboard.change');
        });

        Route::prefix('item-virtual-tour')->group(function(){
            Route::get('/', 'RazenProject\Admin\ItemVirtualTourControler@index')->name('razen-project.admin.item-virtual-tour.index');
            Route::get('/detail/{id}', 'RazenProject\Admin\ItemVirtualTourControler@show');
            Route::post('/','RazenProject\Admin\ItemVirtualTourControler@store')->name('razen-project.admin.item-virtual-tour.store');
            Route::get('/edit/{id}','RazenProject\Admin\ItemVirtualTourControler@edit');
            Route::post('/update','RazenProject\Admin\ItemVirtualTourControler@update')->name('razen-project.admin.item-virtual-tour.update');
            Route::get('/destroy/{id}','RazenProject\Admin\ItemVirtualTourControler@destroy');
        });

        Route::prefix('profil')->group(function(){
            Route::get('/', 'RazenProject\Admin\ProfilController@index')->name('razen-project.admin.profil.index');
            Route::get('/detail/{id}', 'RazenProject\Admin\ProfilController@show');
            Route::post('/','RazenProject\Admin\ProfilController@store')->name('razen-project.admin.profil.store');
            Route::get('/edit/{id}','RazenProject\Admin\ProfilController@edit');
            Route::post('/update','RazenProject\Admin\ProfilController@update')->name('razen-project.admin.profil.update');
            Route::get('/destroy/{id}','RazenProject\Admin\ProfilController@destroy');
            Route::post('/edit-media-sosial-profil', 'RazenProject\Admin\ProfilController@edit_media_sosial_profil')->name('razen-project.admin.profil.edit-media-sosial-profil');
            Route::post('/tambah-media-sosial-profil', 'RazenProject\Admin\ProfilController@tambah_media_sosial_profil')->name('razen-project.admin.profil.tambah-media-sosial-profil');
        });

        Route::prefix('master-media-sosial')->group(function(){
            Route::get('/', 'RazenProject\Admin\Master\MasterMediaSosialController@index')->name('razen-project.admin.master-media-sosial.index');
            Route::get('/detail/{id}', 'RazenProject\Admin\Master\MasterMediaSosialController@show');
            Route::post('/','RazenProject\Admin\Master\MasterMediaSosialController@store')->name('razen-project.admin.master-media-sosial.store');
            Route::get('/edit/{id}','RazenProject\Admin\Master\MasterMediaSosialController@edit');
            Route::post('/update','RazenProject\Admin\Master\MasterMediaSosialController@update')->name('razen-project.admin.master-media-sosial.update');
            Route::get('/destroy/{id}','RazenProject\Admin\Master\MasterMediaSosialController@destroy');
        });

        Route::prefix('master-kategori-project')->group(function(){
            Route::get('/', 'RazenProject\Admin\Master\MasterKategoriProjectController@index')->name('razen-project.admin.master-kategori-project.index');
            Route::get('/detail/{id}', 'RazenProject\Admin\Master\MasterKategoriProjectController@show');
            Route::post('/','RazenProject\Admin\Master\MasterKategoriProjectController@store')->name('razen-project.admin.master-kategori-project.store');
            Route::get('/edit/{id}','RazenProject\Admin\Master\MasterKategoriProjectController@edit');
            Route::post('/update','RazenProject\Admin\Master\MasterKategoriProjectController@update')->name('razen-project.admin.master-kategori-project.update');
            Route::get('/destroy/{id}','RazenProject\Admin\Master\MasterKategoriProjectController@destroy');
        });
    });
});
