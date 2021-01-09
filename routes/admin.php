<?php

    Route::GET('/home', 'AdminController@index')->name('admin.home');
    // Login and Logout
    Route::GET('/', 'LoginController@showLoginForm')->name('admin.login');
    Route::POST('/', 'LoginController@login');
    Route::POST('/logout', 'LoginController@logout')->name('admin.logout');

    // Password Resets
    Route::POST('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::GET('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::POST('/password/reset', 'ResetPasswordController@reset');
    Route::GET('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::GET('/password/change', 'AdminController@showChangePasswordForm')->name('admin.password.change');
    Route::POST('/password/change', 'AdminController@changePassword');

    // Register Admins
    Route::get('/register', 'RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'RegisterController@register');
    Route::get('/{admin}/edit', 'RegisterController@edit')->name('admin.edit');
    Route::delete('/{admin}', 'RegisterController@destroy')->name('admin.delete');
    Route::patch('/{admin}', 'RegisterController@update')->name('admin.update');

    // Admin Lists
    Route::get('/show', 'AdminController@show')->name('admin.show');
    Route::get('/me', 'AdminController@me')->name('admin.me');

    // Admin Roles
    Route::post('/{admin}/role/{role}', 'AdminRoleController@attach')->name('admin.attach.roles');
    Route::delete('/{admin}/role/{role}', 'AdminRoleController@detach');

    // Roles
    Route::get('/roles', 'RoleController@index')->name('admin.roles');
    Route::get('/role/create', 'RoleController@create')->name('admin.role.create');
    Route::post('/role/store', 'RoleController@store')->name('admin.role.store');
    Route::delete('/role/{role}', 'RoleController@destroy')->name('admin.role.delete');
    Route::get('/role/{role}/edit', 'RoleController@edit')->name('admin.role.edit');
    Route::patch('/role/{role}', 'RoleController@update')->name('admin.role.update');

    // active status
    Route::post('activation/{admin}', 'ActivationController@activate')->name('admin.activation');
    Route::delete('activation/{admin}', 'ActivationController@deactivate');
    Route::resource('permission', 'PermissionController');
    // Blog
    Route::get('news', 'BlogController@getNews')->name('admin.news');
    Route::get('create/news', 'BlogController@createNewsForm')->name('admin.create.newsform');
    Route::post('create/news', 'BlogController@createNews')->name('admin.create.news');
    Route::post('getnews', 'BlogController@getBlog_ajax')->name('admin.getnews');
    Route::get('users', 'AdminController@getUsers')->name('admin.users');
    Route::post('getusers', 'AdminController@getUsers_ajax')->name('admin.getusers');
    Route::delete('user/delete', 'AdminController@deleteUser')->name('admin.user.delete');
    Route::delete('news/delete', 'AdminController@deleteNews')->name('admin.delete.news');

    //events
    Route::get('events', 'EventController@getEvents')->name('admin.events');
    Route::get('create/event', 'EventController@createEventForm')->name('admin.create.eventform');
    Route::get('create/offer', 'AdminController@createOfferForm')->name('admin.create.offerform');
    Route::post('create/event', 'EventController@createEvent')->name('admin.create.event');
    Route::post('getevents', 'EventController@getEvent_ajax')->name('admin.getevent');
    Route::delete('event/delete', 'EventController@deleteEvent')->name('admin.delete.event');
    Route::get('add/price', 'AdminController@addPrice')->name('admin.create.price');
    Route::post('add/price', 'AdminController@submitPrice')->name('admin.submit.price');
    Route::get('prices', 'AdminController@getAllPrices')->name('admin.all.price');
    Route::post('prices', 'AdminController@getprices_ajax')->name('admin.getprices');
    Route::post('offer', 'AdminController@submitOffer')->name('admin.create.offer');
    Route::post('getoffers', 'AdminController@getoffers_ajax')->name('admin.getoffers');
    Route::get('get/offers', 'AdminController@getOffers')->name('admin.getOffers');
    Route::delete('delete/offer', 'AdminController@deleteOffer')->name('admin.delete.offer');
    Route::delete('delete/price', 'AdminController@deletePrice')->name('admin.price.delete');
    Route::get('settings', 'AdminController@settings')->name('settings');
    Route::post('settings', 'AdminController@submitSettings')->name('admin.settings');
    Route::get('post/edit/{id}', 'BlogController@editpostform')->name('posts.editpostform');
    Route::post('edit/post', 'BlogController@editpost')->name('admin.edit.news');
    Route::get('/edit/{id}', 'EventController@editeventform')->name('events.edit');
    Route::post('edit/event', 'EventController@editevent')->name('admin.edit.event');
    Route::get('price/edit/{id}', 'AdminController@editpriceform')->name('price.edit');
    Route::post('edit/price', 'AdminController@editprice')->name('admin.edit.price');
    Route::get('offer/edit/{id}', 'AdminController@editofferform')->name('offer.edit');
    Route::post('edit/offer', 'AdminController@editoffer')->name('admin.edit.offer');
    Route::get('enable/{id}', 'AdminController@enable')->name('enable');
    Route::get('disable/{id}', 'AdminController@disable')->name('disable');
    Route::get('all/coupons', 'AdminController@getAllCoupons')->name('admin.all.coupons');
    Route::post('create/coupon', 'AdminController@createCoupon')->name('admin.create.coupon');
    Route::get('create/coupon', 'AdminController@createCouponForm')->name('admin.create.couponform');
    Route::post('get/coupon', 'AdminController@getCoupon_ajax')->name('admin.getcoupon');
    Route::delete('get/coupon', 'AdminController@deleteCoupon')->name('admin.coupon.delete');










    Route::fallback(function () {
        return abort(404);
    });
