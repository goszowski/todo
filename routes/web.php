<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'tasks'], function () {
    Route::get('/', [TasksController::class, 'index']);
    Route::post('/', [TasksController::class, 'store']);
    Route::get('/{task}', [TasksController::class, 'show']);
    Route::patch('/{task}', [TasksController::class, 'update']);
    Route::delete('/{task}', [TasksController::class, 'destroy']);
});
