<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MailController;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

Route::get('/', HomeController::class)->name('home');

Route::resource('cursos', CursoController::class);

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::post('envioMail', [MailController::class, 'envioMail'])->name('envioMail');

Route::view('contacto', 'contacto')->name('contacto');
