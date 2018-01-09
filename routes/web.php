<?php

Route::group(['namespace'=>'Front'],function(){
   Route::get('/','AppController@index');
   Route::get('contact','AppController@contact');
   Route::get('about','AppController@about');
   Route::get('services','AppController@services');
   Route::get('cases','AppController@cases');
   Route::get('login','AppController@ClientLogIn');
   Route::get('signup','AppController@ClientSignUp');
   Route::get('userportal','AppController@UserPortal');

});

Route::group(['namespace'=>'Back', 'prefix'=>'admin' ], function(){
    Route::get('/','DashboardController@index');

    Route::group(['prefix'=>'users'], function(){
        Route::get('/','UserController@index');
        Route::get('add','UserController@addUser');
    });


});