<?php

Route::group(['middleware' => 'auth:razen'], function(){
    Route::get('/razen/dashboard', 'Razen\DashboardController@index')->name('razen.dashboard.index');
    Route::post('/razen/dashboard/change-color', 'Razen\DashboardController@change_color')->name('razen.dashboard.change_color');
});
