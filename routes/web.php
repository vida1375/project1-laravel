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

Route::get('/admin','HomeController@index');
Route::get('/homee','PageController@index');
Route::get('/homeee','PageController@layout');
Route::get('/danestani','Page_6Controller@index');
Route::resource('/logins','LoginController');
Route::get('/search','IndexController@search');
Route::resource('/signups','SignupController');
Route::resource('/coments','ComentController');
Route::resource('/archives','ArchiveController');
// Route::resource('/searchs','SearchController');
// Route::get('/coments','ComentController@home_1');
// Route::get('/signups/create','SignupController@create');
// Route::post('/signups','SignupController@store');
Route::resource('/posts','PostController');
Route::get('/product','Page_1Controller@homepage_1');
Route::get('/product/man','Page_2Controller@homepage_2');
Route::get('/product/woman','Page_3Controller@homepage_3');
Route::get('/product/child','Page_4Controller@homepage_4');
Route::get('/product/accessory','Page_5Controller@homepage_5');
Route::get('api/posts/{post}', function(\App\Post $post){
    // return $post;
    return new \App\Http\Resources\Singlepost($post);
});
Route::get('api/posts', function(){
    return new \App\Http\Resources\PostCollection(\App\Post::all());
});
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Auth::routes();
