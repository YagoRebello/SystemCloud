<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GruposUsuarioController;
use App\Http\Controllers\LaudoController;
use App\Http\Controllers\ExamesController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function() {
    Route::view('/','login.index')->name('login');
    Route::post('/auth', [LoginController::class,'auth'])->name('auth.user');

});

Route::get('/', function () {
    return view('login.index');
});


Route::middleware('auth')->group(function () {
    Route::controller(GruposUsuarioController::class)->group(function (){
        Route::get('/GruposUsuario/edit/{id}', 'edit')->name('GruposUsuario.edit');
        Route::get('/GruposUsuario/index', 'index')->name('GruposUsuario.index');
        Route::post('/GruposUsuario', 'store')->name('GruposUsuario.store');
        Route::get('/GruposUsuario/add', 'create')->name('GruposUsuario.create');
        Route::put('/GruposUsuario/update/{id}', 'update')->name('GruposUsuario.update');
    });

    Route::controller(LaudoController::class)->group(function (){
        Route::get('/Laudo/edit/{id}', 'edit')->name('Laudo.edit');
        Route::get('/Laudo/index', 'index')->name('Laudo.index');
        Route::post('/Laudo', 'store')->name('Laudo.store');
        Route::get('/Laudo/add', 'create')->name('Laudo.create');
        Route::put('/Laudo/update/{id}', 'update')->name('Laudo.update');
        Route::post('/Laudo/gerar-docx', 'gerarDocumentoWord')->name('Laudo.gerar-docx');
    });

    Route::controller(ExamesController::class)->group(function (){
        Route::get('/Exames/edit/{id}', 'edit')->name('Exames.edit');
        Route::get('/Exames/index', 'index')->name('Exames.index');
        Route::post('/Exames', 'store')->name('Exames.store');
        Route::get('/Exames/add', 'create')->name('Exames.create');
        Route::put('/Exames/update/{id}', 'update')->name('Exames.update');
    });

    Route::controller(PacienteController::class)->group(function (){
        Route::get('/Pacientes/edit/{id}', 'edit')->name('Pacientes.edit');
        Route::get('/Pacientes/index', 'index')->name('Pacientes.index');
        Route::post('/Pacientes', 'store')->name('Pacientes.store');
        Route::get('/Pacientes/add', 'create')->name('Pacientes.create');
        Route::put('/Pacientes/update/{id}', 'update')->name('Pacientes.update');
    });

    Route::controller(HomeController::class)->group(function () {
        Route::get('/home','index')->name('home');
    });

    Route::post('/logout',[LoginController::class,'logout'])->name('logout');



});


