<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

// Route::get('dashboard', [UserController::class, 'dashboard']);
// Route::get('login', [UserController::class, 'index'])->name('login');
// Route::post('user-login', [UserController::class, 'userLogin'])->name('login.user');
// Route::get('registration', [UserController::class, 'registration'])->name('register');
// Route::post('registration', [UserController::class, 'userRegistration'])->name('register');
// Route::get('signout', [UserController::class, 'signOut'])->name('signout');

Route::get('dashboard', [UserController::class, 'dashboard']);
Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login', [UserController::class, 'userLogin'])->name('login');
Route::get('/registration', [UserController::class, 'registration'])->name('registration');
Route::post('/registration', [UserController::class, 'userRegistration'])->name('registration');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/employee', [UserController::class, 'employee'])->name('employee')->middleware('auth');
// Route::get('/forgot-password', [UserController::class, 'forgotPassword'])->name('forgot.password');
Route::get('/sign-out', [UserController::class, 'signOut'])->name('signout');
