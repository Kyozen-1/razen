<?php

Route::group(['middleware' => 'auth:razen,razen_studio'], function(){
    Route::get('/razen-studio/admin/dashboard', 'RazenStudio\Admin\DashboardController@index')->name('razen-studio.admin.dashboard.index');
});
