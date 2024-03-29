<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortfolioProjectController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/terms', function () {
    return view('tac');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/projects', [PortfolioProjectController::class, 'index']);

Route::get('/register', [UserController::class, 'create']);

Route::post('/users/create', [UserController::class, 'store']);

Route::get('/login', function() {
    return view('users.login');
})->name('login');

Route::post('/login/check', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/projects/create', [PortfolioProjectController::class, 'create']);
    Route::post('/projects/create', [PortfolioProjectController::class, 'store']);
    Route::get('/projects/{projects}/edit', [PortfolioProjectController::class, 'edit']);
    Route::put('/projects/{projects}/edit', [PortfolioProjectController::class, 'update']);
    Route::delete('/projects/{projects}/delete', [PortfolioProjectController::class, 'destroy']);
});

Route::get('/logout', [AuthController::class, 'userLogout']);

Route::resource('technologies', TechnologyController::class)
    ->only('create', 'store')
    ->middleware(['auth:sanctum', 'verified']);
