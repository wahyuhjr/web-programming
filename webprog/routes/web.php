<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
    return view('index');
});

Route::get('book-1', function () {
    return view('books.book-1');
});
Route::get('book-2', function () {
    return view('books.book-2');
});
Route::get('book-3', function () {
    return view('books.book-3');
});
Route::get('book-4', function () {
    return view('books.book-4');
});

//contact 
Route::get('contact', function () {
    return view('contact');
});

//publisher
Route::get('publisher', function () {
    return view('publisher');
});

Route::resource('/books', BookController::class);
