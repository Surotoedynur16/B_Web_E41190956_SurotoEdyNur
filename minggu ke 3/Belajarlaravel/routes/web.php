<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;

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

Route::get('user', [ManagementUserController::class, 'index']);
Route::post('user', [ManagementUserController::class, 'store']);
Route::get('user/create', [ManagementUserController::class, 'create']);
Route::get('user/{id}', [ManagementUserController::class, 'show']);
Route::put('user/{id}', [ManagementUserController::class, 'update']);
Route::delete('user/{id}', [ManagementUserController::class, 'destroy']);
Route::get('user/{id}/edit', [ManagementUserController::class, 'edit']);








