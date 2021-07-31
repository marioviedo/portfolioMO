<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [indexController::class, 'index'])->name('home');

Route::get('projects', [indexController::class, 'viewProjects'])->name('projects');

Route::get('contact', [indexController::class, 'viewContact'])->name('contact');

Route::get('contact/{validate}', [contactController::class, 'validateStore'])->name('contact.validate');

Route::get('downloadCV/{lang}', [indexController::class, 'downloadCV'])->name('downloadCV');

Route::post('contact', [contactController::class, 'sendMessage'])->name('contact.create');
