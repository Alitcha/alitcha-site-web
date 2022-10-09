<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AdherantController;

use App\Http\Controllers\NewsletterUserController;

use App\Http\Controllers\ContactMessageController;

use App\Http\Controllers\CommentaireController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LabsController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;
use App\Models\Team;


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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/apropos', function () {
    $team = Team::all();
    return view('apropos',[
        'team' => $team
    ]);
})->name('apropos');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/labs', [LabsController::class, 'show'])->name('labs');

Route::get('/webmagazine', [ArticleController::class, 'showMagazine'])->name('webmagazine');
Route::get('/article/{id}', [ArticleController::class, 'showArticle'])->whereNumber('id')->name('article');

//Search
Route::post('/search/article', [SearchController::class, 'search']);

Route::post('/newsletter/member/add', [NewsletterUserController::class, 'store'])->name('newsletteradd');

Route::post('/contact', [ContactMessageController::class, 'sendMessage'])->whereNumber('id')->name('contactMessage');

Route::post('/commentaire/{id}', [CommentaireController::class, 'store'])->whereNumber('id')->name('addComment');


//Routes de l'adhesion
Route::post('/user/adhesion', [AdherantController::class, 'adhesion']) -> name('adhesion_user');


Route::get('/article', [ArticleController::class, 'index'])->name('article.index')->middleware('can:access-dashboard');;
Route::get('/article/{id}/show', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/{id}/edit', [ArticleController::class, 'edit'])->name('article.edit')->middleware('can:access-dashboard');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create')->middleware('can:access-dashboard');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store')->middleware('can:access-dashboard');;
Route::put('/article/{id}', [ArticleController::class, 'update'])->name('article.update')->middleware('can:access-dashboard');
Route::put('/article/{id}/publish', [ArticleController::class, 'publish'])->name('article.publish')->middleware('can:access-dashboard');
Route::delete('/article/{id}', [ArticleController::class, 'destroy'])->name('article.destroy')->middleware('can:access-dashboard');

//Image
Route::get('/image', [ImageController::class, 'index'])->name('image.index')->middleware('can:access-dashboard');;
Route::post('/image/store', [ImageController::class, 'store'])->name('image.store')->middleware('can:access-dashboard');;


//Gestion Magazine
Route::get('/magazine', [MagazineController::class, 'index'])->name('magazine.index')->middleware('can:access-dashboard');;
Route::post('/magazine/store', [MagazineController::class, 'store'])->name('magazine.store')->middleware('can:access-dashboard');;
Route::get('/magazine/{id}/admin', [MagazineController::class, 'adminshow'])->name('magazine.adminshow')->middleware('can:access-dashboard');;
Route::get('/magazine/{id}', [MagazineController::class, 'read'])->name('magazine.read');


//Admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/home', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/admin', [AdminController::class, 'showAdmin'])->name('showadmin')->middleware('can:admin');
Route::get('/admin/add', [AdminController::class, 'addAdmin'])->name('addadmin')->middleware('can:admin');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store')->middleware('can:admin');
Route::post('/admin/romove/{id}', [AdminController::class, 'removeAdmin'])->name('admin.remove')->middleware('can:admin');
Route::get('/users', [AdminController::class, 'users'])->name('users.list')->middleware('can:admin');
Route::get('/admin/request', [AdminController::class, 'mail'])->name('admin.request')->middleware('auth');


//Editor
Route::get('/editor', [EditorController::class, 'index'])->name('editor.index')->middleware('can:access-dashboard');
Route::get('/editor/add', [EditorController::class, 'add'])->name('editor.add')->middleware('can:admin');
Route::post('/editor/store', [EditorController::class, 'store'])->name('editor.store')->middleware('can:admin');
Route::post('/editor/romove/{id}', [EditorController::class, 'remove'])->name('editor.remove')->middleware('can:admin');


//Auth
Route::auth();
