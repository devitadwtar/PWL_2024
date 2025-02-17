<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;



Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

// Route::get('/greeting', function () {
// 	return view('hello', ['name' => 'Devita']);
// });

//ArticleController
Route::get('/articles/{id}', ArticleController::class);

//AboutController
Route::get('/about', AboutController::class);

//HomeController
Route::get('/', HomeController::class);

Route::get('/hello', function () {
    return 'Hello World';
 });

 Route::get('/world', function () {
    return 'World';
 });
 
 Route::get('/welcome', function () {
    return 'Selamat Datang';
 });

 Route::get('/about', function () {
    return 'Nama: Devita Dwi Lestari <br>
    NIM: 2341760002';
 });

 Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
    });
    
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID '.$id;
// });

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
    });

Route::get('/user/{name?}', function ($name='John') {
   return 'Nama saya '.$name;
        });
        
Route::get('/hello', [WelcomeController::class,'hello']);

// // Route untuk halaman utama
// Route::get('/', [PageController::class, 'index']);

// // Route untuk halaman about
// Route::get('/about', [PageController::class, 'about']);

// // Route untuk halaman artikel dengan parameter id
// Route::get('/articles/{id}', [PageController::class, 'articles']);
Route::get('/greeting', function () {
	return view('blog.hello', ['name' => 'Devita Dwi']);
});

Route::get('/greeting', [WelcomeController::class, 'greeting']);


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
