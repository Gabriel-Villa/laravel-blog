<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('user/blog');
})->name('home');


Route::get('post', function () {
    return view('user/post');
})->name('post');

/*
Route::get('admin/home', function () {
    return view('admin/home');
})->name('admin');
*/

//User routes
Route::group(['namespace' => 'User'], function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('post', 'PostController@index')->name('post');
});


//Admin routes

Route::group(['namespace' => 'Admin'], function () {

    Route::get('admin/home', 'HomeController@index')->name('admin.home');
    Route::resource('admin/post', 'PostController');
    Route::resource('admin/category', 'CategoryController');
    Route::resource('admin/tag', 'TagController');
    Route::resource('admin/user', 'UserController');

});

