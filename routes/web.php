<?php

use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'ArticleController@index')->name('index');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

//Articles
Route::get('/add', 'ArticleController@add')->middleware('auth');
Route::post('/store', 'ArticleController@store');
Route::get('/detail/{article}', 'ArticleController@detail');

// Comment
Route::get('/comment/{article}', 'CommentController@store');



Route::get('/test', function() {
//    return redirect();
    flash('Matn e flash');
    return view('test');
});

Route::resource('pages', 'PageController');

Route::resource('categories', 'CategoryController');
