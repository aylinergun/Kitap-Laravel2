<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\HomeController;
use App\Models\Book;



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


Route::get('/','HomeController@index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'crud'])->name('home');

//Route::get('/home','HomeController@crud');


Route::resource('books' , 'BookController');


Route::resource('books' , 'BooksController');
