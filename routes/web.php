<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\userController;
// Route::get('/user', [userController::class, 'show']);
// Route::get('/biography', [userController::class, 'biography']);



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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('wahab', function () {
    return view('home');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('tamplates', function () {
    return view('templates');
});