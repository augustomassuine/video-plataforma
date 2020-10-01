<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/history-page', 'HomeController@historyPage')->name('historyPage');
    Route::get('/video-page', 'HomeController@videoPage')->name('videoPage');


    Route::get('/settings', 'HomeController@settings')->name('settings');
    Route::get('/subscriptions', 'HomeController@subscriptions')->name('subscriptions');
    Route::get('/account', 'HomeController@account')->name('account');
    Route::get('/home', 'HomeController@home')->name('home');

    Route::resource('channels', 'CannelController');
    Route::get('/channel/videos', 'CannelController@getChannelVideos');

    Route::resource('courses', 'CourseController');
    Route::post('/courses/add/comment', 'CourseController@addComment')->name('course.add.comment');
    Route::post('/courses/update/comment/', 'CourseController@updateComment')->name('course.update.comment');
    Route::delete('/courses/{course}/delete/comment/{comment}', 'CourseController@deleteComment')->name('course.delete.comment');

    Route::resource('videos', 'VideoController');
    Route::get('/upload', 'VideoController@upload')->name('upload');
    Route::post('/videos/mass/update', 'VideoController@uploadMass')->name('videos.mass.update');


    Route::get('/courses/{course}/video/{video}', 'VideoController@playVideoCourse')->name('play.video.course');
    Route::get('/videos/play/{video}', 'VideoController@playVideo')->name('play.video');


    Route::resource('categories', 'CategoryController');

    Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');

});


