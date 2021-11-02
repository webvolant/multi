<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
/*
Route::get('/login', function () {
    echo 'login form'; die();
})->name('login');*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('/user', function () {
        echo 'user web auth ok';
    });
});


Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');

/*
Route::get('/product/add', 'ProductController@add')->name('product.add');
Route::post('/product/add', 'ProductController@add')->name('product.add');
Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::post('/product/update/{id}', 'ProductController@update')->name('product.update');
Route::get('/product/index', 'ProductController@index')->name('product.index');
Route::post('/product/index', 'ProductController@index')->name('product.index');
Route::get('/product/delete/{id}', 'ProductController@delete')->name('product.delete');
*/