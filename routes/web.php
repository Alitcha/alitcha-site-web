<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
<<<<<<< HEAD
use App\Http\Controllers\UserController;

use App\Http\Controllers\NewsletterUserController;

use App\Http\Controllers\ContactMessageController;

use App\Http\Controllers\CommentaireController;

=======
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EditorController;
>>>>>>> feature_admin

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

<<<<<<< HEAD

Route::post('/newsletter/member/add', [NewsletterUserController::class, 'store'])->name('newsletteradd');

Route::post('/contact', [ContactMessageController::class, 'sendMessage'])->whereNumber('id')->name('contactMessage');

Route::post('/commentaire/{id}', [CommentaireController::class, 'store'])->whereNumber('id')->name('addComment');


//Routes de l'adhesion
Route::post('/user/adhesion', [UserController::class, 'adhesion']) -> name('adhesion_user');

=======
Route::get('/article', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/{id}/show', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create')->middleware('can:access-dashboard');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');


//Admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('can:access-dashboard');
Route::get('/admin', [AdminController::class, 'showAdmin'])->name('showadmin')->middleware('can:admin');
Route::get('/admin/add', [AdminController::class, 'addAdmin'])->name('addadmin')->middleware('can:admin');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store')->middleware('can:admin');
Route::post('/admin/romove/{id}', [AdminController::class, 'removeAdmin'])->name('admin.remove')->middleware('can:admin');
Route::get('/users', [AdminController::class, 'users'])->name('users.list')->middleware('can:admin');


//Editor
Route::get('/editor', [EditorController::class, 'index'])->name('editor.index')->middleware('can:access-dashboard');
Route::get('/editor/add', [EditorController::class, 'add'])->name('editor.add')->middleware('can:admin');
Route::post('/editor/store', [EditorController::class, 'store'])->name('editor.store')->middleware('can:admin');
Route::post('/editor/romove/{id}', [EditorController::class, 'remove'])->name('editor.remove')->middleware('can:admin');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> feature_admin
