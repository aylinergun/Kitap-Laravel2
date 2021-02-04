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

//Route::get('/', function () {
  //return view('welcome');
//});

//Route::get('/','VisitController@index')->name('visit');

//Route::get('/',function(){
  //return view('visit');
//});

Route::get('/','VisitController@index');


//Route::get('/login',function(){
  //return view('login');
//});

//Route::get('/register',function(){
  //return view('register');
//});

Auth::routes();

//Route::post('/login','Auth\LoginController@showLoginForm')->name('showLoginForm');




Route::get('/home', 'HomeController@index')->name('home');


Route::resource('books' , 'BooksController');

//Route::get('/books' , 'BooksController@index');
//Route::get('/books/create' , 'BooksController@create');
//Route::post('/books/store', 'BooksController@store');
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  //return view('dashboard');
//})->name('dashboard');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
