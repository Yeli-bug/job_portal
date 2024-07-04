<?php
// "3" Agerga la Ruta y la importo arriba

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/account/register',[AccountController::class, 'registration'])->name('account.registration');
Route::post('/account/process-register',[AccountController::class, 'processRegistration'])->name('account.processRegistration');
