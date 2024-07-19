<?php
// "3" Agerga la Ruta y la importo arriba

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});










Route::get('/',[HomeController::class, 'index'])->name('home');

//Ruta , cubre el error del login account.forgotPassword
Route::get('/account/forgot-password', [AccountController::class, 'showForgotPasswordForm'])->name('account.forgotPassword');

Route::group(['account'], function(){

    //Rutas invitados
    Route::group(['middleware' => 'guest'], function(){
        Route::get('/register',[AccountController::class,'registration'])->name('account.registration');
        Route::post('/process-register',[AccountController::class,'processRegistration'])->name('account.processRegistration');
        Route::get('/login',[AccountController::class,'login'])->name('account.login');
        Route::post('/authenticate',[AccountController::class,'authenticate'])->name('account.authenticate');
    });

    //Rutas autenticadas (middleware)
    Route::group(['middleware' => 'auth'], function(){
        Route::get('/profile',[AccountController::class, 'profile'])->name('account.profile');
        Route::put('/update-profile',[AccountController::class, 'updateProfile'])->name('account.updateProfile');
        Route::get('/logout',[AccountController::class, 'logout'])->name('account.logout');
        Route::post('/update-password',[AccountController::class,'updatePassword'])->name('account.updatePassword');   
    });
    
});