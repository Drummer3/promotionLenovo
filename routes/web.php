<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use Illuminate\Support\Facades\View;
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

Route::get('/recoveritem/{userid}/{itemid}', [myController::class, 'recover'])
        ->middleware('auth')
        ->name('recover');

Route::post('/newItem', [myController::class, 'show'])
        ->middleware('auth')
        ->name('newItem');

Route::get('/dashboard', [myController::class, 'dashboard'])
        ->middleware('auth')
        ->name('dashboard');

Route::get('/deleted', [myController::class, 'deleted'])
        ->middleware('auth')
        ->name('deleted');

Route::get('adaptive/{cat}', function($cat){
        return View::make('components.'.$cat)->render();
});


require __DIR__.'/auth.php';
