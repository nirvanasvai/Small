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


Auth::routes();
Route::get('/', [App\Http\Controllers\Shared\MainController::class, 'index'])->name('main.public');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function() {
    Route::group(['middleware' => 'isUser'], function () {
        Route::resource('/request', \App\Http\Controllers\Client\RequestController::class);
    });
});
Route::group(['prefix' => 'manager', 'middleware' => 'auth'], function() {
    Route::group(['middleware' => 'isManager'], function () {
        Route::resource('/request', \App\Http\Controllers\Admin\RequestController::class)
            ->names([
                'index' => 'manager.request.index',
                'show' => 'manager.request.show'
            ])->only(['index', 'show']);

        Route::resource('/answer', \App\Http\Controllers\Admin\AnswerController::class)
            ->names(['store' => 'manager.answer.store',])->only(['store']);
    });
});

