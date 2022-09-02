<?php

Route::group(['middleware' => 'auth:razen'], function(){
    Route::get('/razen/dashboard', 'Razen\DashboardController@index')->name('razen.dashboard.index');
    Route::post('/razen/dashboard/change', 'Razen\DashboardController@change')->name('razen.dashboard.change');
});
