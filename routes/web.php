<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('user.dashboard');
})->name('dashboard');
    


// Sample Routes
Route::get('/complainant', function () {
    return view('user.complainant.index');
})->name('complainant.index');

Route::get('/create/complainant', function () {
    return view('user.complainant.create');
})->name('complainant.create');


Route::get('/otp.confirmation', function () {
    return view('threads.otp_confirmation');
})->name('otp.confirmation');