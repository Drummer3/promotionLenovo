<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
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
    return view('index');
});

Route::get('/home', [myController::class, 'home'])
        ->middleware(['auth'])
        ->name('home');

Route::get('/list', [myController::class, 'listing'])
        ->middleware('auth')
        ->name('list');

Route::get('/removeitem/{userid}/{itemid}', [myController::class, 'remove'])
        ->middleware('auth')
        ->name('remove');

Route::post('/newItem', [myController::class, 'show'])
        ->middleware('auth')
        ->name('newItem');

Route::get('/admin', [myController::class, 'admin'])
        ->name('admin');

Route::post('/admin', [myController::class, 'adminLogin'])
        ->middleware('auth')
        ->name('admin');


require __DIR__.'/auth.php';
