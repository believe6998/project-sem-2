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

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('client/login');
});

Route::get('/personal-training', function () {
    return view('client/list-pt');
});

Route::get('cl/blog', function () {
    return view('client/main-blog');
});
Route::get('/', function () {
    return view('client/home');
});

Route::get('/contact-us', function () {
    return view('client/contact');
});
Route::get('/blog', function () {
    return view('client/main-blog');
});

Route::get('/detail-blog', function () {
    return view('client/detail-blog');
});

Route::get('/ad', function () {
    return view('admin/home');
});

Route::get('/ad/personal-training', function () {
    return view('admin/pt');
});


Route::get('/ad/user', function () {
    return view('admin/user');
});
Route::get('/pt/detail', function () {
    return view('client/pt-detail');
});
Route::resource('ad/blog','BlogController');
