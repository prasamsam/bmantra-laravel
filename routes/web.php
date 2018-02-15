<?php

Route::group(['namespace'=>'Front'],function(){
   Route::get('/','AppController@index')->name('home');
   Route::get('contact','AppController@contact')->name('contact');
   Route::get('about','AppController@about')->name('about');
   Route::get('services','AppController@services')->name('services');
   Route::get('cases','AppController@cases')->name('cases');
   Route::get('news','AppController@news')->name('news');
   Route::get('news/{id}','AppController@singleNews')->name('single-news');
   Route::get('userlogin','AppController@ClientLogIn')->name('user-login');
   Route::post('userlogin','AppController@ClientLogInAction');
   Route::get('signup','AppController@ClientSignUp')->name('signup');
   Route::post('signup','AppController@ClientSignUpAction');
   Route::get('/logout','AppController@logout')->name('client-logout');
   Route::get('/forms/abn-registration-sole-trader','AppController@abnRegistrationSoleTrader')->name('form-abn');


});

Route::group(['namespace'=>'Front','middleware'=>['client.route.protect']],function(){
    Route::get('userportal','AppController@UserPortal')->name('userportal');
    Route::get('/userportal/settings','AppController@ClientSetting')->name('client-setting');
    Route::post('/userportal/settings','AppController@ClientSettingAction');
    Route::post('/userportal/update-password','AppController@ClientUpdatePassword')->name('client-update-password');
    Route::post('/userportal','AppController@UploadPicture')->name('client-picture-upload');

});

Route::group(['namespace'=>'Back'],function(){
    Route::get('login','UserController@login')->name('admin-login');
    Route::post('login','UserController@loginAction');
});

Route::group(['namespace'=>'Back', 'prefix'=>'admin'], function(){
        Route::get('/','DashboardController@index')->name('admin');

    Route::group(['prefix'=>'users'], function(){
        Route::get('/','UserController@index')->name('admin-user');
        Route::post('user-status','UserController@userStatus');
        Route::get('client_detail','UserController@clientDetail')->name('client-detail');
        Route::get('add','UserController@addUser')->name('user-add');
        Route::post('add','UserController@addUserAction');
        Route::get('/setting','UserController@adminSetting')->name('admin-setting');
        Route::post('/setting','UserController@adminSettingAction');
        Route::post('/update_password','UserController@updatePassword')->name('update-password');
    });

    Route::group(['prefix'=>'users'],function(){
        Route::get('/manage','UserController@managePage')->name('manage-page');
        Route::get('/manage/manage-home','UserController@manageHomePage')->name('manage-home');
        Route::get('/manage/manage-home/add-slide','UserController@addHomeSlide')->name('add-home-slide');
        Route::post('/manage/manage-home/upload-slide','UserController@homeSlideAction')->name('upload-home-slide');
        Route::get('/manage/manage-home/edit-slide/{id}','UserController@editHomeSlideUpdate')->name('edit-home-slide');
        Route::post('/manage/manage-home/edit-slide/update/{id}','UserController@updateHomeSlideAction')->name('update-home-slide');
        Route::delete('/manage/manage-home/delete-slide/{id}','UserController@deleteSlideAction')->name('delete-slide');
        Route::get('/manage/manage-home/add-services','UserController@manageServices')->name('home-services');
        Route::post('/manage/manage-home/upload-services','UserController@addServices')->name('add-services');
        Route::get('/manage/manage-home/edit-services/{id}','UserController@editServices')->name('edit-services');
        Route::post('/manage/manage-home/edit-services/update/{id}','UserController@updateService')->name('update-services');
        Route::delete('/manage/manage-home/delete-service/{id}','UserController@deleteService')->name('delete-services');
        Route::get('/manage/manage-home/add-package','UserController@addPackage')->name('add-package');
        Route::post('/manage/manage-home/upload-package','UserController@uploadPackage')->name('upload-package');
        Route::get('/manage/manage-home/edit-package/{id}','UserController@editPackage')->name('edit-package');
        Route::post('manage/manage-home/edit-package/update/{id}','UserController@updatePackage')->name('update-package');
        Route::delete('manage/manage-home/delete-package/{id}','UserController@deletePackage')->name('delete-package');
    });

    Route::group(['prefix'=>'users'], function(){
        Route::get('/manage/manage-home/add-cases','UserController@addCases')->name('add-cases');
        Route::post('/manage/manage-home/upload-cases','UserController@uploadCases')->name('upload-cases');
        Route::get('/manage/manage-home/edit-cases/{id}','UserController@editCases')->name('edit-cases');
        Route::post('/manage/manage-home/edit-cases/update/{id}','UserController@updateCases')->name('update-cases');
        Route::delete('/manage/manage-home/delete-cases/{id}','UserController@deleteCases')->name('delete-cases');
        Route::get('/manage/manage-home/add-testimony','UserController@addTestimony')->name('add-testimony');
        Route::post('manage/manage-home/add_testimony/upload','UserController@uploadTestimony')->name('upload-testimony');
        Route::get('/manage/manage-home/edit-testimony/{id}','UserController@editTestimony')->name('edit-testimony');
        Route::post('/manage/manage-home/update-testimony/{id}','UserController@updateTestimony')->name('update-testimony');
        Route::delete('/manage/manage-home/delete-testimony/{id}','UserController@deleteTestimony')->name('delete-testimony');

    });

    Route::group(['prefix'=>'users'], function(){
       Route::get('/manage/manage-home/add-news','UserController@addNews')->name('add-news');
       Route::post('/manage/manage-home/add-news/upload','UserController@uploadNews')->name('upload-news');
       Route::get('/manage/manage-home/edit-news/{id}','UserController@editNews')->name('edit-news');
       Route::post('/manage/manage-home/update-news/{id}','UserController@updateNews')->name('update-news');
       Route::delete('/manage/manage-home/delete-news/{id}','UserController@deleteNews')->name('delete-news');
    });
    Route::group(['prefix' =>'users'], function(){
       Route::get('/manage/manage-about/{id}','UserController@manageAboutPage')->name('manage-about');
       Route::post('/manage/manage-about/update/{id}','UserController@updateAboutPage')->name('update-about');
       Route::get('/manage/manage-others/edit-other-info/{id}','UserController@editOtherInfo')->name('edit-other-info');
       Route::post('/manage/manage-others/update-other-info/{id}','UserController@updateOtherInfo')->name('update-other-info');
    });
});

Route::group(['namespace'=>'Back','prefix'=>'admin'], function(){
    Route::get('logout','UserController@logout')->name('logout');
});



