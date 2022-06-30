<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\NewsletterUserController;

use App\Http\Controllers\ContactMessageController;

use App\Http\Controllers\CommentaireController;


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

=======
//Routes de l'adhesion
Route::post('/user/adhesion', [UserController::class, 'adhesion']) -> name('adhesion_user');
>>>>>>> feature-adhesion
