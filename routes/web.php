<?php

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
    Route::get('/','PostController@index');
    
    Auth::routes();

    Route::group(['middleware' => 'auth'], function()
    {
         
    Route::get('/user','PostController@profile');
    
    Route::post('/posts', 'PostController@store');
    
    Route::get('/posts/create', 'PostController@create');
    
    Route::get('/posts/user/{id}', 'PostController@profile');
    
    Route::get('/posts/{post}', 'PostController@show');
    
    Route::get('/posts/{post}/edit', 'PostController@edit');
    
    Route::put('/posts/{post}', 'PostController@update');
    
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('/user', 'UserController@index');
    
    Route::get('/unlogin','PostController@unnlogin');
    
    });

    

   
    
    

  

