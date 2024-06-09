<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\MisionVisionController;
use App\Http\Controllers\ProfileController;
use App\Models\Mision_Vision;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get("mision_vision", [MisionVisionController::class, "index"])->name("mision_vision");
    Route::get("contacto", [ContactoController::class, "index"])->name("contacto");

    Route::resource('documentos', DocumentoController::class)->names([
        'index' => 'documentos.index',
        'create' => 'documentos.create',
        'store' => 'documentos.store',
        'show' => 'documentos.show',
       // 'edit' => 'documentos.edit',
        //'update' => 'documentos.update',
        //'destroy' => 'documentos.destroy',
    ]);
    Route::get('/documentos/{documento}/edit', [DocumentoController::class,'edit'])->name('documentos.edit');
    Route::put('/documentos/{documento}', [DocumentoController::class, 'update'])->name('documentos.update');
    Route::delete('/documentos/{documento}', [DocumentoController::class,'destroy'])->name('documentos.destroy');






});

require __DIR__ . '/auth.php';
