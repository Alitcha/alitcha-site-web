<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AdminController;

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
})->name('home');

Route::get('/apropos', function () {
    return view('apropos');
})->name('apropos');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/webmagazine', [ArticleController::class, 'showMagazine'])->name('webmagazine');
Route::get('/article/{id}', [ArticleController::class, 'showArticle'])->whereNumber('id')->name('article');

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create')->middleware('can:admin');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');


//Admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('can:access-dashboard');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
