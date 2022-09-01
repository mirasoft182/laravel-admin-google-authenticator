<?php
Route::get('auth/login', 'LaravelAdminGoogleAuthenticator\Http\Controllers\GoogleAuthenticatorController@login');
Route::post('auth/login', 'LaravelAdminGoogleAuthenticator\Http\Controllers\GoogleAuthenticatorController@postLogin');
