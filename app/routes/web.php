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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/sample/{id}', \App\Http\Controllers\Sample\IndexController::class);
Route::get('/task', \App\Http\Controllers\Task\IndexController::class)
->name('task.index');
Route::get('/task/add', \App\Http\Controllers\Task\AddController::class)
->name('task.add');
Route::post('/task/create', \App\Http\Controllers\Task\CreateController::class)
->name('task.create');
Route::get('/task/update/{taskId}', \App\Http\Controllers\Task\Update\IndexController::class)
->name('task.update.index');
Route::put('/task/update/{taskId}', \App\Http\Controllers\Task\Update\PutController::class)
->name('task.update.put');
Route::put('/task/completed/{taskId}', \App\Http\Controllers\Task\CompletedController::class)
->name('task.completed');
Route::delete('/task/delete/{taskId}', \App\Http\Controllers\Task\DeleteController::class)
->name('task.delete');
