<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\GreetController;

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

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'index')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/delete/{id}', 'delete')->name('delete');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
});

Route::get('/main', [SendEmailController::class,'main'])->name('main');
Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');


Route::controller(GalleryController::class)->group(function() {
    Route::get('/gallery', 'index')->name('gallery.index');
    Route::post('/gallery/create', 'create')->name('gallery.create');
    Route::get('/gallery/edit/{id}', 'edit')->name('gallery.edit');
    Route::post('/gallery/update/{id}', 'update')->name('gallery.update');
    Route::get('/gallery/delete/{id}', 'destroy')->name('gallery.destroy');
});

Route::resource('gallery', GalleryController::class);

// Route::get('/info', [InfoController::class,'index'])->name('info');
// Route::get('/greet', [GreetController::class,'greet'])->name('greet');
