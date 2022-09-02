<?php

Route::group(['middleware' => 'auth:razen'], function(){
    Route::get('/razen/dashboard', 'Razen\DashboardController@index')->name('razen.dashboard.index');
    Route::post('/razen/dashboard/change', 'Razen\DashboardController@change')->name('razen.dashboard.change');

    //Master Agama
    Route::get('/razen/manajemen-akun/razen-studio', 'ManajemenAkun\RazenStudioController@index')->name('manajemen-akun.razen-studio.index');
    Route::get('/razen/manajemen-akun/razen-studio/detail/{id}', 'ManajemenAkun\RazenStudioController@show');
    Route::post('/razen/manajemen-akun/razen-studio','ManajemenAkun\RazenStudioController@store')->name('manajemen-akun.razen-studio.store');
    Route::get('/razen/manajemen-akun/razen-studio/edit/{id}','ManajemenAkun\RazenStudioController@edit');
    Route::post('/razen/manajemen-akun/razen-studio/update','ManajemenAkun\RazenStudioController@update')->name('manajemen-akun.razen-studio.update');
    Route::get('/razen/manajemen-akun/razen-studio/destroy/{id}','ManajemenAkun\RazenStudioController@destroy');
});
