<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;


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
Route::get('/', [HomeController::class, 'show']);


Route::get('/empresa', function () {
    return view('company');
});

Route::get('/locacao-impressoras-multifuncionais', function () {
    return view('services_printing');
});

Route::get('/locacao-notebooks-e-desktops', function () {
    return view('services_desktop');
});

Route::get('/locacao-etiquetadoras', function () {
    return view('services_labeling_machines');
});

Route::get('/gestao-documental', function () {
    return view('services_document_management');
});

Route::get('noticias/{slug}', [NewsController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
