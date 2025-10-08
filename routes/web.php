<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrearUsuario;

// Ruta raíz redirige al login
Route::get('/', function () {
    return redirect('/login');
});

// Rutas de autenticación
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas Crear usuarios
Route::get('/register', [CrearUsuario::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [CrearUsuario::class, 'register']);

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
});

// Solicitar email para recuperación (Formulario + POST)
Route::get('/forgot-password', function () {
    return view('auth.passwords.EnviarPassword');
})->name('password.request');


Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');

// Formulario para restablecer (token + email en url)
Route::get('/reset-password/{token}', function ($token) {
    $email = request('email');
    return view('auth.ReiniciarPassword', compact('token', 'email'));
})->name('password.reset');

Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

