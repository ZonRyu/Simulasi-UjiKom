<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
use App\Http\Controllers\LoginController;

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

Route::redirect('/', '/login-page');

Route::get('/login-page', [LoginController::class, 'loginPage']);

Route::get('/register-page', [Register::class, 'registerPage']);
Route::get('/list-page', [Register::class, 'listPage']);

Route::post('/register', [Register::class, 'registerAkun']);
Route::post('/login', [LoginController::class, 'loginAkun']);

Route::get('/logout', [LoginController::class, 'logout']);