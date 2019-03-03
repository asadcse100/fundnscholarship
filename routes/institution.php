<?php

Route::group(['namespace' => 'Institution'], function() {
    Route::get('/', 'HomeController@index')->name('institution.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('institution.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('institution.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('institution.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('institution.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('institution.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('institution.password.reset');

});