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
Route::resource('category', 'CategoryController');
Route::resource('admin/time', 'TimeController');
Route::resource('admin/duration', 'DurationController');
Route::resource('admin/orders', 'AdminOrderController');
Route::resource('admin/time-pt', 'TimePTController');

Route::get('cl/blog', function () {
    return view('client/main-blog');
});
//Route::get('/', 'ClientBlogController@indexhome');



Route::get('/admin/review-success','ReviewController@index2');
Route::get('/admin/review-deleted','ReviewController@index3');


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

Route::get('/admin', 'AdminController@index');

Route::get('/admin/personal-training', function () {
    return view('admin/pt');
});

Route::get('/admin/blog', function () {
    return view('admin/blog/list-blog');
});

Route::get('/admin/user/edit', function () {
    return view('admin/user/edit-user');
});

//Route::get('/pt/detail', function () {
//    return view('client/pt-detail');
//});
Route::resource('admin/blog', 'BlogController');

Route::resource('/admin/pt', 'AdminPTController');

Route::resource('/blog', 'ClientBlogController', ['as' => 'client']);

Route::get('/admin/form', function () {
    return view('admin/form');
});

Route::resource('/admin/user', 'UserController');

Route::post('/admin/change-status-category', 'AdminCategoryController@changeStatus');
Route::get('/admin/deleted-category', 'AdminCategoryController@index2');


Route::post('/admin/change-status-duration', 'DurationController@changeStatus');
Route::get('/admin/deleted-duration', 'DurationController@index2');

Route::post('/admin/change-status-time', 'TimeController@changeStatus');
Route::get('/admin/deleted-time', 'TimeController@index2');


Route::post('/admin/change-status-blog', 'BlogController@changeStatus');
Route::get('/admin/deleted-blog', 'BlogController@index2');

Route::post('/admin/change-status-user', 'UserController@changeStatus');
Route::get('/admin/deleted-user', 'UserController@index2');

Route::post('/admin/change-status-pt', 'AdminPTController@changeStatus');
Route::get('/admin/deleted-pt', 'AdminPTController@index2');

Route::post('/admin/change-status-order', 'AdminOrderController@changeStatus');
Route::get('/admin/deleted-order', 'AdminOrderController@index2');

Route::post('/admin/change-status-time-pt', 'TimePTController@changeStatus');
Route::get('/admin/deleted-time-pt', 'TimePTController@index2');


Auth::routes();

Route::get('/', 'ClientBlogController@indexhome', 'RoleController@roleUser')->name('home');

Route::resource('order', 'OrderController');
Route::post('/payment', 'OrderController@createPayment');
Route::get('/return-vnpay', function () {
    return view('client.return-payment');
});

Route::resource('admin/home', 'HomeController');

Route::post('/admin/change-status-home', 'HomeController@changeStatus');
Route::get('/admin/deleted-home', 'HomeController@index2');

Route::get('/', 'HomeController@index3');


Route::get('/api-get-chart-data', 'OrderController@getChartDataApi');
Route::get('/api-get-data-to-time', 'OrderController@getDataToTimeApi');
Route::get('/api-get-pie-chart-data', 'OrderController@getPieChartDataApi');
Route::get('/admin/review{review}', 'ReviewController@edit2')->name('review.edit2');
Route::resource('/pt', 'ClientPTController', ['as' => 'client']);
Route::resource('/admin/review', 'ReviewController');
Route::post('/admin/review/change-status', 'ReviewController@changeStatus');
Route::get('/admin/review/get-by-id/{id}', 'ReviewController@getById');
