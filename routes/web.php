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
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/book',[BookController::class,'index'])->name('listBookView');
// Route::get('/admin','BookController@getList')->name('adminView');
// Route::group(['prefix' => 'admin'], function(){};
Route::get('run-queue','RunQueueController@runQueue');

Route::get('send-mail','SendMailController@sendMail');

