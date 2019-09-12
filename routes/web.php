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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::resource('personal-training', 'PersonalTrainingController');
Route::resource('/admin/category', 'AdminCategoryController');

Route::get('cl/blog', function () {
    return view('client/main-blog');
});
//Route::get('/', 'ClientBlogController@indexhome');


Route::get('/contact-us', function () {
    return view('client/contact');
});
Route::get('/blog', function () {
    return view('client/main-blog');
});

Route::get('/detail-blog', function () {
    return view('client/detail-blog');
});
Route::get('/index-body', function () {
    return view('client/index-body/do-chi-so-co-the');
});
Route::get('/index-body-2', function () {
    return view('client/index-body/index-body-2');
});
Route::get('/index-body-3', function () {
    return view('client/index-body/index-body-3');
});
Route::get('/index-body-4', function () {
    return view('client/index-body/index-body-4');
});


Route::get('/admin', function () {
    return view('admin/home');
});

Route::get('/admin/personal-training', function () {
    return view('admin/pt');
});

Route::get('/admin/blog', function () {
    return view('admin/blog');
});

Route::get('/admin/user/edit', function () {
    return view('admin/user/edit');
});

Route::get('/pt/detail', function () {
    return view('client/pt-detail');
});
Route::resource('admin/blog','BlogController');

Route::resource('/blog','ClientBlogController',['as' => 'client']);

Route::get('/admin/form', function () {
    return view('admin/form');
});

Route::resource('/admin/user', 'UserController');

Auth::routes();

Route::get('/','ClientBlogController@indexhome')->name('home');


