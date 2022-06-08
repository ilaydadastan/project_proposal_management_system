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

Route::get('/adashboard', function () {
    return view('dashboard.admin');
})->middleware(['auth', 'admin'])->name('adashboard');
Route::get('/sdashboard', function () {
    return view('dashboard.student');
})->middleware(['auth', 'student'])->name('sdashboard');
Route::get('/tdashboard', function () {
    return view('dashboard.teacher');
})->middleware(['auth', 'teacher'])->name('tdashboard');

Route::get('/aprofile', function () {
    return view('profile.admin');
})->middleware(['auth', 'admin'])->name('aprofile');
Route::get('/sprofile', function () {
    return view('profile.student');
})->middleware(['auth', 'student'])->name('sprofile');
Route::get('/tprofile', function () {
    return view('profile.teacher');
})->middleware(['auth', 'teacher'])->name('tprofile');

Route::get('/pstatus', function () {
    return view('project.status');
})->middleware(['auth', 'student'])->name('pstatus');
Route::get('/create', function () {
    return view('project.create');
})->middleware(['auth', 'student'])->name('create');
Route::get('/tstatus', function () {
    return view('project.tstatus');
})->middleware(['auth', 'teacher'])->name('tstatus');

Route::get('/ping', 'App\\Http\\Controllers\\SolariumController@checkSimilarity');


require __DIR__.'/auth.php';
