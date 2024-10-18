<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\MainController;

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

// Route::get('/', function () {
//     $trains = Train::all();

//     dd($trains);

//     return view('welcome');
//     // return view('welcome', compact('firstName', 'lastName'));
// });
route::get('/', [MainController::class, 'index']);

Route::get('/chi-siamo', function () {
    return view('subpages.about');
});

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
