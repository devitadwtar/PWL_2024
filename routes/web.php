<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
    });

Route::get('/user/{name?}', function ($name='John') {
   return 'Nama saya '.$name;
        });
        
Route::get('/hello', [WelcomeController::class,'hello']);

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

Route::get('/', function () {
    return view('welcome');
});
