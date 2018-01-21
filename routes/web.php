<?php

Route::group(['namespace'=>'Front'],function(){
   Route::get('/','AppController@index')->name('home');
   Route::get('contact','AppController@contact')->name('contact');
   Route::get('about','AppController@about')->name('about');
   Route::get('services','AppController@services')->name('services');
   Route::get('cases','AppController@cases')->name('cases');
   Route::get('userlogin','AppController@ClientLogIn')->name('user-login');
   Route::post('userlogin','AppController@ClientLogInAction');
   Route::get('signup','AppController@ClientSignUp')->name('signup');
   Route::post('signup','AppController@ClientSignUpAction');
   Route::get('/logout','AppController@logout')->name('client-logout');

});

Route::group(['namespace'=>'Front','middleware'=>'auth:client'],function(){
    Route::get('userportal','AppController@UserPortal')->name('userportal');
    Route::get('/userportal/settings','AppController@ClientSetting')->name('client-setting');
    Route::post('/userportal/settings','AppController@ClientSettingAction');
    Route::post('/userportal/update_password','AppController@ClientUpdatePassword')->name('client-update-password');

});

Route::group(['namespace'=>'Back'],function(){
    Route::get('login','UserController@login')->name('admin-login');
    Route::post('login','UserController@loginAction');
});

Route::group(['namespace'=>'Back', 'prefix'=>'admin'], function(){
        Route::get('/','DashboardController@index')->name('admin');

    Route::group(['prefix'=>'users'], function(){
        Route::get('/','UserController@index')->name('admin-user');
        Route::get('client_detail','UserController@clientDetail')->name('client-detail');
        Route::get('add','UserController@addUser')->name('user-add');
        Route::post('add','UserController@addUserAction');
        Route::get('update','UserController@updateUser')->name('user-update');
        Route::get('/setting','UserController@adminSetting')->name('admin-setting');
        Route::post('/setting','UserController@adminSettingAction');
        Route::post('/update_password','UserController@updatePassword')->name('update-password');
    });

    Route::get('logout','UserController@logout')->name('logout');

});



