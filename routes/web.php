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

//Route::get('/login', function () {
//    return view('client/login');
//});

Route::resource('personal-training', 'PersonalTrainingController');

Route::get('/blog', function () {
    return view('client/main-blog');
});

Route::get('/', function () {
    return view('client/home');
});

Route::get('/contact-us', function () {
    return view('client/contact');
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


Route::get('/ad','RoleController@roleAdmin', function () {
    return view('admin/home');
});

Route::get('/ad/personal-training','RoleController@roleAdmin', function () {
    return view('admin/pt');
});

Route::get('/ad/blog','RoleController@roleAdmin', function () {
    return view('admin/blog');
});

Route::get('/ad/user','RoleController@roleAdmin', function () {
    return view('admin/user');
});

Route::get('/guest-role', 'RoleController@roleGuest');
Route::get('/user-role', 'RoleController@roleUser');
Route::get('/admin-role', 'RoleController@roleAdmin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
