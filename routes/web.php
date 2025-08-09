<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\AffectationController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('texte2', function(){
    return view('texte2');
});
Route::get('nav', function(){
    return view('nav');
});
// Route::get('voitures', function(){
//     return view('voitures.liste');
// });

Route::resource('affectations',AffectationController::class);


Route::get('voitures',[VoitureController::class,'index'])->name('voitures.index');
Route::get('voitures/create',[VoitureController::class,'create'])->name('voitures.create');
Route::post('voitures/ajouter',[VoitureController::class,'store'])->name('voitures.store');
Route::get('voitures/{voiture}/details',[VoitureController::class,'show'])->name('voitures.show');
Route::get('voitures/{voiture}/editer',[VoitureController::class,'edit'])->name('voitures.edit');
Route::put('voitures/{voiture}',[VoitureController::class,'update'])->name('voitures.update');
Route::delete('voitures/{voiture}',[VoitureController::class,'destroy'])->name('voitures.destroy');

Route::get('chauffeurs',[ChauffeurController::class,'index'])->name('chauffeurs.index');
Route::get('chauffeurs/create',[ChauffeurController::class,'create'])->name('chauffeurs.create');
Route::post('chauffeurs/ajouter',[ChauffeurController::class,'store'])->name('chauffeurs.store');



