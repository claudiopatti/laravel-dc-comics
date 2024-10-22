<?php

use Illuminate\Support\Facades\Route;

// controller
use App\Http\Controllers\Guest\MainController;
use App\Http\Controllers\Admin\ComicController;


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

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/chi-siamo', [MainController::class, 'about'])->name('about');

//route diretto con tuute le 7 route che si collegano al ComicController e le relative funzioni
Route::resource('comics', ComicController::class);

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
