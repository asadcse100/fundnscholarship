<?php

Route::group(['namespace' => 'Welfare'], function() {
    Route::get('/', 'HomeController@index')->name('welfare.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('welfare.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('welfare.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('welfare.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('welfare.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('welfare.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('welfare.password.reset');

});