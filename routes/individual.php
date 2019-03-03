<?php

Route::group(['namespace' => 'Individual'], function() {
    Route::get('/', 'HomeController@index')->name('individual.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('individual.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('individual.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('individual.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('individual.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('individual.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('individual.password.reset');

});