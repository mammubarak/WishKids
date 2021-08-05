<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; //new

Route::resource('posts', PostController::class); //new

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/myprofile', function () {
    return view('profilepage');
})->name('profilepage');

Route::get('/video', function () {
    return view('video');
});
