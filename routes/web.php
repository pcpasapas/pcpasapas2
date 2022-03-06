<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactUsFormController;



/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/composants', function () {
    return view('welcome');
});

Route::get('/montage', function () {
    return view('welcome');
});

Route::get('/devis', function () {
    return view('welcome');
});



Route::get('/Home', [App\Http\Controllers\HomeController::class , 'index'])->name('home');


// Route::get('contact-us', 'ContactController@getContact');
// Route::post('contact-us', 'ContactController@saveContact');
