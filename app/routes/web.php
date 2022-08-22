<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RouteGroup;

use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Models\User;

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
    return view('pages.authentication.sign-in.index');
});

Route::prefix('/auth')
    ->group(function () {
        Route::post('/signin', [UserController::class, 'signin']);
        Route::get('/signout', [UserController::class, 'signout']);
    });

Route::prefix('/dashboard')
    ->middleware(['is.auth', 'whatRole'])
    ->group(function () {
        Route::get('', [DashboardController::class, 'index']);
    });
