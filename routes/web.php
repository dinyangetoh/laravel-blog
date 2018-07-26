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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');
Route::get('companies', 'CompanyController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('posts', 'PostController@index');
Route::group(['middleware' => 'auth'], function () {
    
    Route::get('post/new', 'PostController@new');

    Route::post('post/category/new','PostController@newCategory');

});