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

/**
 * Маршруты товаров
 */
Route::get('product/add', 'ProductController@add')
            ->name('productAdd')
            ->middleware('auth', 'check.admin');

Route::get('product/{id}', 'ProductController@single')->name('single');

Route::get('product/all', 'ProductController@all')
            ->name('productAll')
            ->middleware('auth', 'check.admin');

Route::post('product/create', 'ProductController@create')
            ->name('productCreate')
            ->middleware('auth', 'check.admin');
Route::post('product/{id}/delete', 'ProductController@delete')
            ->middleware('auth', 'check.admin');
/**
 * Маршруты категорий
 */
Route::get('category/all', 'CategoryController@all')->name('CatAll');
Route::get('category/add', 'CategoryController@add')
            ->name('CatAdd')
            ->middleware('auth', 'check.admin');
Route::get('category/edit/{category}', 'CategoryController@edit')
            ->middleware('auth', 'check.admin');
Route::post('category/create', 'CategoryController@create')
            ->name('createCat')
            ->middleware('auth', 'check.admin');
Route::post('category/update/{category}', 'CategoryController@update')
            ->middleware('auth', 'check.admin');
Route::post('category/delete/{id}', 'CategoryController@delete')
            ->middleware('auth', 'check.admin');
/**
 * Маршруты подкатегорий
 */
Route::get('subcategory/add', 'SubCategoryController@add')
            ->name('SubcatAdd')
            ->middleware('auth', 'check.admin');
Route::get('subcategory/all', 'SubCategoryController@all')->name('SubcatAll');
Route::post('subcategory/delete/{id}', 'SubCategoryController@delete')
            ->middleware('auth', 'check.admin');
Route::post('subcategory/create', 'SubCategoryController@create')
            ->name('createSubCat')
            ->middleware('auth', 'check.admin');
/**
 * Маршруты ролей пользователей
 */
Route::get('role/add', 'RoleController@add')
            ->name('RoleAdd')
            ->middleware('auth', 'check.admin');
Route::post('role/create', 'RoleController@create')
            ->name('createRole')
            ->middleware('auth', 'check.admin');
/**
 * Маршруты купонов на товары
 */
Route::get('coupon/all', 'CouponController@all')
            ->name('CouponAll');
Route::get('coupon/add', 'CouponController@add')
            ->name('CouponAdd')
            ->middleware('auth', 'check.admin');
Route::post('coupon/create', 'CouponController@create')
            ->name('createCoupon')
            ->middleware('auth', 'check.admin');
Route::post('coupon/delete/{id}', 'CouponController@delete')
            ->middleware('auth', 'check.admin');
/**
 * Маршруты городов
 */
Route::get('cities', 'CityController@all')->name('city.all');
Route::get('city/add', 'CityController@add')->name('city.add');
Route::post('city/store', 'CityController@store')->name('city.store');
Route::get('city/{city}/edit', 'CityController@edit')->name('city.edit');
Route::post('city/{city}/update', 'CityController@update')->name('city.update');
Route::post('city/{city}/delete', 'CityController@delete')->name('city.delete');
/**
 * Маршруты администрирования
 */
Route::get('/admin', 'AdminController@index')
            ->name('admin');

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
