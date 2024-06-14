<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/', function () {return view('welcome');})->name('home');
Route::get('/drinks', function () { return view('drinks');})->name('drinks');
Route::get('/gallery', function () { return view('gallery');})->name('gallery');
Route::get('/contact', function () { return view('contact');})->name('contact');

Route::get('/reserva/create', [ReservaController::class , 'create'])->name('reserva.create');
Route::post('/reserva/store', [ReservaController::class , 'store'])->name('reserva.store');
Route::get('/del-reserva/{id}', [ReservaController::class , 'destroy'])->name('delreserva');
Route::get('/mod-reserva/{id}', [ReservaController::class , 'edit'])->name('modreserva');
Route::post('/update-reserva/{id}', [ReservaController::class , 'update'])->name('updatereserva');
Route::get('/dashboard', [ReservaController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');





Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('milogout');//cierra sesion



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
