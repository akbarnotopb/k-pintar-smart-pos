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

Route::get('/', function () {
    return view('dashboard.dashboard');
});


Route::name('admin.')->group(function(){

	Route::view('/admin/dashboard','dashboard.dashboard')->name('dashboard');

	Route::view('/admin/history/profit','history.profit-chart')->name('recap-history');

	Route::view('/admin/history','history.history')->name('history');

	Route::view('/admin/product','product.product')->name('product');

    Route::view('/admin/product/add','product.product-add')->name('product-add');

	Route::view('/admin/product/history','product.product-history')->name('product-history');

	Route::view('/admin/member','member.member')->name('member');

	Route::view('/admin/member/add','member.member-add')->name('member-add');

	Route::view('/admin/employee','employee.employee')->name('employee');

	Route::view('/admin/employee/add','employee.employee-add')->name('employee-add');


});
