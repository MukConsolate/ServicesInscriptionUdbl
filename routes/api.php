<?php

use App\Http\Controllers\CandidatController;
use App\Http\Controllers\EtudiantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/candidats', [CandidatController::class, 'index']);

Route::get('/candidats/{candidat}', [CandidatController::class, 'show']);

Route::post('/candidats', [CandidatController::class, 'store']);

Route::put('/candidats/{id}/resultat', [CandidatController::class, 'putResultat']);

Route::get('/candidats/getResultat/{candidat}', [CandidatController::class, 'getResultat']);

Route::post('/etudiants/{candidat_id}', [EtudiantController::class, 'store']);

Route::get('/etudiants', [EtudiantController::class, 'showEtudiants']);
