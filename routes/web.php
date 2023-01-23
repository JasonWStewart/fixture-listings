<?php

use App\Models\Fixture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FixtureController;

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

Route::get('/', [FixtureController::class, 'index']);

Route::get('/fixtures/create', [FixtureController::class, 'create'])->middleware('auth');

Route::post('/fixtures', [FixtureController::class, 'store'])->middleware('auth');

Route::get('/fixtures/{fixture}/edit', [FixtureController::class, 'edit'])->middleware('auth');

Route::put('/fixtures/{fixture}', [FixtureController::class, "update"])->middleware('auth');

Route::delete('/fixtures/{fixture}', [FixtureController::class, "destroy"])->middleware('auth');

Route::get('/fixtures/manage', [FixtureController::class, 'manage'])->middleware('auth');

Route::get('/fixtures/{fixture}', [FixtureController::class, 'show']);

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::post('/users', [UserController::class, 'store']);

Route::post('/users/login', [UserController::class, 'authenticate']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
