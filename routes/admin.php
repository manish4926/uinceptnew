<?php

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () 
{
	Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
});
