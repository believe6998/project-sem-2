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
Route::resource('category', 'CategoryController');

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
Route::get('/policy', function () {
    return view('client/policy');
});

Route::get('/detail-blog', function () {
    return view('client/detail-blog');
});
Route::get('/user-detail', function () {
    return view('client/user-detail');
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

Route::get('/admin','RoleController@roleAdmin');

Route::get('/admin/personal-training', function () {
    return view('admin/pt');
});

Route::get('/admin/blog', function () {
    return view('admin/blog/list-blog');
});

Route::get('/admin/user/edit', function () {
    return view('admin/user/edit-user');
});

Route::get('/pt/detail', function () {
    return view('client/pt-detail');
});
Route::resource('admin/blog','BlogController');

Route::resource('/admin/pt','AdminPTController');

Route::resource('/blog','ClientBlogController',['as' => 'client']);

Route::get('/admin/form', function () {
    return view('admin/form');
});

Route::resource('/admin/user', 'UserController');

Route::post('/admin/change-status-category', 'AdminCategoryController@changeStatus');
Route::get('/admin/deleted-category', 'AdminCategoryController@index2');

Route::post('/admin/change-status-blog', 'BlogController@changeStatus');
Route::get('/admin/deleted-blog', 'BlogController@index2');

Route::post('/admin/change-status-user', 'UserController@changeStatus');
Route::get('/admin/deleted-user', 'UserController@index2');

Route::post('/admin/change-status-pt', 'AdminPTController@changeStatus');
Route::get('/admin/deleted-PT', 'AdminPTController@index2');



Auth::routes();

Route::get('/','ClientBlogController@indexhome','RoleController@roleUser')->name('home');

Route::resource('order', 'OrderController');

Route::resource('admin/home', 'HomeController');

Route::post('/admin/change-status-home', 'HomeController@changeStatus');
Route::get('/admin/deleted-home', 'HomeController@index2');

Route::get('/', 'HomeController@index3');


