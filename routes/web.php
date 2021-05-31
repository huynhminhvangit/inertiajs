<?php

use App\Http\Controllers\Auth\SocialController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
require __DIR__.'/auth.php';

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('auth/facebook', [SocialController::class, 'facebookRedirect'])->name('facebook.redirect');
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook'])->name('facebook.login');

Route::get('auth/google', [SocialController::class, 'googleRedirect'])->name('google.redirect');
Route::get('auth/google/callback', [SocialController::class, 'loginWithGoogle'])->name('google.login');
