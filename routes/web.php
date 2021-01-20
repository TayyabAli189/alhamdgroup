<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class,'view_home']);
Route::get('/about',[\App\Http\Controllers\Frontend\AboutController::class,'view_about'])->name('frontend.about.about');
Route::get('/contactus',[\App\Http\Controllers\Frontend\ContactController::class,'view_contact'])->name('frontend.contact.contact');
Route::get('/service',[\App\Http\Controllers\Frontend\ServiceController::class,'view_service'])->name('frontend.service.service');


Route::middleware(['auth'])->group(function () {
Route::get('/admin', [\App\Http\Controllers\Backend\ContactController::class,'index'])->name('listing.contact');

});


Route::get('add/contact',[\App\Http\Controllers\Backend\ContactController::class,'create'])->name('create.contact');
Route::post('add/contact',[\App\Http\Controllers\Backend\ContactController::class,'store'])->name('store.contact');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
