<?php

Route::group(['namespace' => 'SchoolCollegeVersity'], function() {
    Route::get('/', 'HomeController@index')->name('school-college-versity.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('school-college-versity.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('school-college-versity.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('school-college-versity.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('school-college-versity.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('school-college-versity.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('school-college-versity.password.reset');

});