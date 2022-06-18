<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/index', function () {
//    return view('accounts.admin.crud.index');
// });
Route::get('/create', function () {
    return view('accounts.admin.crud.create');
});

//Route::post('/store','testController@onStore')->name('store');
//Route::post('store', 'App\Http\Controllers\testController@onStore')->name('store');
Route::post('store', 'App\Http\Controllers\Account\Admin\ProductController@onStore')->name('store');
Route::get('index', 'App\Http\Controllers\Account\Admin\ProductController@onIndex')->name('index');
Route::get('show/{id}', 'App\Http\Controllers\Account\Admin\ProductController@onShow')->name('show');
Route::get('edit/{id}', 'App\Http\Controllers\Account\Admin\ProductController@onEdit')->name('edit');
Route::put('update/{id}', 'App\Http\Controllers\Account\Admin\ProductController@onUpdate')->name('update');
