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

Route::get('product/all', 'ProductController@all')
            ->name('productAll')
            ->middleware('auth', 'check.admin');

Route::get('product/{id}', 'ProductController@single')->name('single');

Route::post('product/create', 'ProductController@create')
            ->name('productCreate')
            ->middleware('auth', 'check.admin');
            
Route::get('product/delete/{id}', 'ProductController@delete')
            ->middleware('auth', 'check.admin');

Route::get('product/single/{id}', 'ProductController@single')
            ->name('singleProduct')
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

Route::get('category/delete/{id}', 'CategoryController@delete')
            ->middleware('auth', 'check.admin');
/**
 * Маршруты подкатегорий
 */
Route::get('subcategory/add', 'SubCategoryController@add')
            ->name('SubcatAdd')
            ->middleware('auth', 'check.admin');

Route::get('subcategory/all', 'SubCategoryController@all')->name('SubcatAll');

Route::get('subcategory/edit/{id}', 'SubCategoryController@edit')
            ->name('editSubcategory')
            ->middleware('auth', 'check.admin');

Route::get('subcategory/delete/{id}', 'SubCategoryController@delete')
            ->middleware('auth', 'check.admin');

Route::post('subcategory/create', 'SubCategoryController@create')
            ->name('createSubCat')
            ->middleware('auth', 'check.admin');

Route::post('subcategory/update/{subcategory}', 'SubCategoryController@update')
            ->name('updateSubcat')
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
 * Маршруты для пользователей
 */
Route::get('user/all', 'UserController@all')
            ->name('userAll')
            ->middleware('auth', 'check.admin');



/**
 * Маршруты для заказов
 */
Route::get('order/all', 'OrderController@all')
            ->name('orderAll')
            ->middleware('auth', 'check.admin');

Route::get('order/single/{id}', 'OrderController@single')
            ->name('orderSingle')
            ->middleware('auth', 'check.admin');

Route::get('order/delete/{id}', 'OrderController@delete')
            ->name('orderDelete')
            ->middleware('auth', 'check.admin');

/**
 * Маршруты купонов на товары
 */
Route::get('coupon/all', 'CouponController@all')
            ->name('coupons');
Route::get('coupon/add', 'CouponController@add')
            ->name('coupon.add')
            ->middleware('auth', 'check.admin');
Route::post('coupon/create', 'CouponController@create')
            ->name('coupon.create')
            ->middleware('auth', 'check.admin');
Route::get('coupon/{id}/edit', 'CouponController@edit')
            ->name('coupon.edit')
            ->middleware('auth', 'check.admin');
Route::post('coupon/{id}/update', 'CouponController@update')
            ->name('coupon.update')
            ->middleware('auth', 'check.admin');
Route::post('coupon/{id}/delete', 'CouponController@delete')
            ->name('coupon.delete')
            ->middleware('auth', 'check.admin');
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
