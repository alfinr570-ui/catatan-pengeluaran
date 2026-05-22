<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengeluaranController;

Route::get('/', function () {
    return redirect('/pengeluaran');
});



Route::get('/pengeluaran', [PengeluaranController::class, 'index']);

Route::get('/pengeluaran/create', [PengeluaranController::class, 'create']);

Route::post('/pengeluaran/store', [PengeluaranController::class, 'store']);

Route::get('/pengeluaran/{id}/edit', [PengeluaranController::class, 'edit']);

Route::put('/pengeluaran/{id}', [PengeluaranController::class, 'update']);

Route::delete('/pengeluaran/{id}', [PengeluaranController::class, 'destroy']);
