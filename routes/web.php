<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\reactController;

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

Route::get('welcome', [reactController::class, 'welcome']);
Route::get('/home', [reactController::class, 'home']);
Route::get('/admin/dashboard', [reactController::class, 'admin']);
Route::get('/admin/gundam', [reactController::class, 'gundam']);

Route::get('/admin/create', [reactController::class, 'createGundam']);
Route::post('/admin/create', [reactController::class, 'createSaveGundam']);

Route::get('/admin/edit/{id}', [reactController::class, 'editGundam']);
Route::post('/admin/gundam/{id}', [reactController::class, 'editSaveGundam']);

Route::delete('/admin/gundam/{id}', [reactController::class, 'deleteGundam']);
