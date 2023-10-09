<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventoController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/create', [EventoController::class, 'show'])->name('create');
Route::post('/eventos', [EventoController::class, 'create'])->name('EventoController.create');



Route::get('/copy', function () {
    return view('copy');
})->name('copy');

Route::get('/read', function () {
    return view('read');
})->name('read');

/*
Route::middleware('auth')->group(function () {

    Route::resource('create', EventoController::class);
});

Route::get('/create', function () {
    return view('create');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('create')->group(function () {
    Route::post('/create', [EventoController::class, 'create'])->name('evento.create');
});
Route::middleware('create')->group(function () {
    Route::post('/create', [EventoController::class, 'create'])->name('evento.create');
    Route::get('/create', [EventoController::class, 'read'])->name('evento.read');
    Route::patch('/create', [EventoController::class, 'update'])->name('evento.update');
    Route::delete('/create', [EventoController::class, 'delete'])->name('evento.delete');
});
Route::middleware('create')->group(function () {
    Route::post('/create', [EventoController::class, 'create'])->name('evento.create');
    Route::get('/create', [EventoController::class, 'read'])->name('evento.read');
    Route::patch('/create', [EventoController::class, 'update'])->name('evento.update');
    Route::delete('/create', [EventoController::class, 'delete'])->name('evento.delete');
});
Route::middleware('create')->group(function () {
    Route::post('/create', [EventoController::class, 'create'])->name('evento.create');
    Route::get('/create', [EventoController::class, 'read'])->name('evento.read');
    Route::patch('/create', [EventoController::class, 'update'])->name('evento.update');
    Route::delete('/create', [EventoController::class, 'delete'])->name('evento.delete');
});
*/
require __DIR__.'/auth.php';
