<?php



Route::group(['namespace'=>'Roocket\Cms\Http\Controllers'],function (){
    Route::get('/adminpanel/index','AdminPanelController@index')->name('admin')->middleware([\Roocket\Cms\Http\Middleware\Admin::class]);
    Route::get('/adminpanel/config',function (){
        return config('cms.url');
    });
});





