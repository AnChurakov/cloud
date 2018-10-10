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

Route::get('product/{id}', 'ProductController@add')->name('single');
Route::get('product/add', 'ProductController@add')->name('productAdd');
Route::post('product/create', 'ProductController@create');
Route::post('product/{id}/delete', 'ProductController@delete');

Route::get('category/add', 'CategoryController@add')->name('CatAdd');
Route::get('category/all', 'CategoryController@all')->name('CatAll');
Route::post('category/create', 'CategoryController@create');
Route::post('category/delete/{id}', 'CategoryController@delete');

Route::get('subcategory/add', 'SubCategoryController@add')->name('SubcatAdd');
Route::get('subcategory/all', 'SubCategoryController@all')->name('SubcatAll');
Route::post('subcategory/delete/{id}', 'SubCategoryController@delete');
Route::post('subcategory/create', 'SubCategoryController@create');

Route::get('role/add', 'RoleController@add')->name('RoleAdd');
Route::post('role/create', 'RoleController@create');

Route::get('coupon/all', 'CouponController@all')->name('CouponAll');
Route::get('coupon/add', 'CouponController@add')->name('CouponAdd');
Route::post('coupon/create', 'CouponController@create');
Route::post('coupon/delete/{id}', 'CouponController@delete');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
