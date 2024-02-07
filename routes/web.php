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

Route::get('/dashboard', function () {
    return view('test.user.dashboard');
})->name('dashboard');
    


// Auth Sample Routes
Route::get('/', function () {
    return view('test.auth.login');
})->name('auth.login');

Route::get('/register', function () {
    return view('test.auth.register');
})->name('auth.register');



// auth.forgot-password


// Sample Routes
Route::get('/complainant', function () {
    return view('test.user.complainant.index');
})->name('complainant.index');

Route::get('/create/complainant', function () {
    return view('test.user.complainant.create');
})->name('complainant.create');

Route::get('/create/complainant', function () {
    return view('test.user.complainant.create');
})->name('complainant.create');




Route::get('/otp/confirmation', function () {
    return view('test.threads.otp_confirmation');
})->name('otp.confirmation');


// nodal
Route::get('/nodal', function () {
    return view('test.user.nodal.dashboard');
})->name('nodal.dashboard');

Route::get('/nodal/complainant', function () {
    return view('test.user.nodal.index');
})->name('nodal.complainant.index');

Route::get('/nodal/complainant/edit', function () {
    return view('test.user.nodal.edit');
})->name('nodal.complainant.edit');




// fto
Route::get('/fco', function () {
    return view('test.user.fco.dashboard');
})->name('fco.dashboard');

Route::get('/fco/complainant', function () {
    return view('test.user.fco.index');
})->name('fco.complainant.index');

Route::get('/fco/complainant/edit', function () {
    return view('test.user.fco.edit');
})->name('fco.complainant.edit');