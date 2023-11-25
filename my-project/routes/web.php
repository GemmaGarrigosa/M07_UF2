<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvaController;
use App\Http\Controllers\SignController; //utilitzem el controlador creat

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

Route::prefix('ProvaController')->group(function(){
    Route::get('/usuari1',[ProvaController::class,'usuari1']);
    Route::get('/usuari2',[ProvaController::class,'usuari2']);
});

Route::prefix('Gemma')->group(function(){ //tindrem un grup de funcions que comencen per aquest prefix
    // Route::get('/signin/{valor1}/{valor2}/{valor3}/{valor4}',[SignController::class,'signin'])-> name('signin'); //signin rep 4 paràmetres + preparem la ruta perque es pugui cridar des de la view
    // Route::get('/signup/{valor1}/{valor2}/{valor3}',[SignController::class,'signup'])-> name('signup');//signup rep 3 paràmetres
    Route::get('/signin',[SignController::class,'signin2'])-> name('signin'); //signin rep 4 paràmetres + preparem la ruta perque es pugui cridar des de la view
    Route::get('/signup',[SignController::class,'signup2'])-> name('signup');
    
});

