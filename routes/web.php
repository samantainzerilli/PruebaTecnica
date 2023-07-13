<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;

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
Route::get('/calendario', function () {
    return view('calendar');
})->name('calendar');

Route::get('/', function () {
    return view('home');
});
Route::get('/users', function () {
    return 'Users index';
})->name('users.index');

Route::get('/users/create', function () {
    return 'Create user';
})->name('users.create');

Route::post('/users', function () {
    return 'Store user';
})->name('users.store');

Route::get('/users/{user}/edit', function ($user) {
    return 'Edit user: ' . $user;
})->name('users.edit');


Route::put('/users/{user}', function ($user) {
    return 'Update user: ' . $user;
})->name('users.update');

Route::delete('/users/{user}', function ($user) {
    return 'Delete user: ' . $user;
})->name('users.destroy');


Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');


