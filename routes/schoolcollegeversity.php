<?php

Route::group(['namespace' => 'SchoolCollegeVersity'], function() {
    Route::get('/', 'HomeController@index')->name('schoolcollegeversity.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('schoolcollegeversity.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('schoolcollegeversity.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('schoolcollegeversity.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('schoolcollegeversity.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('schoolcollegeversity.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('schoolcollegeversity.password.reset');

});