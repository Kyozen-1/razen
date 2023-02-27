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
    });
});
