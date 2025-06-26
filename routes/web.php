<?php


use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthMiddleware;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('show.login');
    Route::post('/login', 'login')->name('login');
});


Route::middleware(AuthMiddleware::class)->group(function () {
    Route::redirect('/', 'panel/blogs');
    Route::prefix('panel')->name('panel.')->group(function () {
        Route::resource('blogs', \App\Http\Controllers\BlogController::class);
    });
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});


Route::prefix('client')->name('client.')->group(function () {
    Route::resource('blogs', \App\Http\Controllers\Client\BlogController::class);
});
