<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;


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

Route::get('/user-login', [AuthController::class, 'loginform'])->name('user.login');
Route::get('/user-registration', [AuthController::class, 'registrationform'])->name('user.registration');

Route::post('/user-login', [AuthController::class, 'login'])->name('user.login');

Route::get('user-balance', [AuthController::class, 'getRemainingBalance'])->middleware('isLoggedIn');
