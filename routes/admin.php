<?php

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () 
{
	Route::get('/dashboard','AdminController@dashboard')->name('admindashboard');

	Route::get('/news','AdminController@viewNews')->name('adminviewnews');
	Route::get('/news/add','AdminController@addNews')->name('adminaddnews');
	Route::post('/news/add/submit','AdminController@addNewsSubmit')->name('adminaddnewssubmit');
	Route::get('/news/delete','AdminController@deleteNewsSubmit')->name('admindeletenews');

	Route::get('/event','AdminController@viewEvent')->name('adminviewevent');
	Route::get('/event/add','AdminController@addEvent')->name('adminaddevent');
	Route::post('/event/add/submit','AdminController@addEventSubmit')->name('adminaddeventsubmit');
	Route::get('/event/delete','AdminController@deleteEventSubmit')->name('admindeleteevent');
});
