<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\BookController;
// use App\Http\Controllers\PublisherController;

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


//contact 
Route::get('contact', function () {
    return view('contact');
});

// Route::get('/books/{id}',[BooksController::class,'book']);
// Route::get('/',[BooksController::class,'index']);

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/detail-book/{id}', [HomeController::class, 'bookdetail'])->name('book-detail');
Route::get('/publisher', [HomeController::class, 'publisher'])->name('publisher');
Route::get('/detail-publisher/{id}', [HomeController::class, 'publisherdetail'])->name('publisherdetail');
Route::get('/categories/{categories}', [HomeController::class, 'bookcategories'])->name('categories');

// Route::resource('books', BookController::class);
// Route::resource('publisher', PublisherController::class);
