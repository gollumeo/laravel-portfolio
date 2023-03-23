<?php

use App\Http\Controllers\PortfolioProjectController;
use App\Http\Controllers\UserController;
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

Route::get('/projects', [PortfolioProjectController::class, 'index']);

Route::get('/register', [UserController::class, 'create']);

Route::post('user/create', [UserController::class, 'store']);
