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

	Route::get('/pastevent','AdminController@viewPastEvent')->name('adminviewpastevent');
	Route::get('/pastevent/add','AdminController@addPastEvent')->name('adminaddpastevent');
	Route::post('/pastevent/add/submit','AdminController@addPastEventSubmit')->name('adminaddpasteventsubmit');
	Route::get('/pastevent/delete','AdminController@deletePastEventSubmit')->name('admindeletepastevent');


	Route::get('/blog','AdminController@viewBlog')->name('adminviewblog');
	Route::get('/blog/add','AdminController@addBlog')->name('adminaddblog');
	Route::post('/blog/add/submit','AdminController@addBlogSubmit')->name('adminaddblogsubmit');
	Route::get('/blog/edit/{id}','AdminController@editBlog')->name('admineditblog');
	Route::post('/blog/edit/submit','AdminController@editBlogSubmit')->name('admineditblogsubmit');
	Route::get('/blog/delete','AdminController@deleteBlogSubmit')->name('admindeleteblog');

	Route::post('/blog/inline/image/upload/submit','UploadController@blogImageUpload')->name('blogimageuploader');

	Route::post('/delete/from/db/submit','UploadController@deleteFromDB')->name('deletefromdb');
});
