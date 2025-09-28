<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExercicioController;

// ex1
Route::get('/exercicio1', [ExercicioController::class, 'showExercicio1'])->name('exercicio1.show');

Route::post('/exercicio1', [ExercicioController::class, 'handleExercicio1'])->name('exercicio1.handle');

// ex2
Route::get('/exercicio2', [ExercicioController::class, 'showExercicio2'])->name('exercicio2.show');

Route::post('/exercicio2', [ExercicioController::class, 'handleExercicio2'])->name('exercicio2.handle');

// ex3
Route::get('/exercicio3', [ExercicioController::class, 'showExercicio3'])->name('exercicio3.show');

Route::post('/exercicio3', [ExercicioController::class, 'handleExercicio3'])->name('exercicio3.handle');

// ex4
Route::get('/exercicio4', [ExercicioController::class, 'showExercicio4'])->name('exercicio4.show');

Route::post('/exercicio4', [ExercicioController::class, 'handleExercicio4'])->name('exercicio4.handle');

// ex5
Route::get('/exercicio5', [ExercicioController::class, 'showExercicio5'])->name('exercicio5.show');

Route::post('/exercicio5', [ExercicioController::class, 'handleExercicio5'])->name('exercicio5.handle');


// ex6
Route::get('/exercicio6', [ExercicioController::class, 'showExercicio6'])->name('exercicio6.show');

Route::post('/exercicio6', [ExercicioController::class, 'handleExercicio6'])->name('exercicio6.handle');


// ex7
Route::get('/exercicio7', [ExercicioController::class, 'showExercicio7'])->name('exercicio7.show');

Route::post('/exercicio7', [ExercicioController::class, 'handleExercicio7'])->name('exercicio7.handle');

// ex8
Route::get('/exercicio8', [ExercicioController::class, 'showExercicio8'])->name('exercicio8.show');

Route::post('/exercicio8', [ExercicioController::class, 'handleExercicio8'])->name('exercicio8.handle');

// ex9
Route::get('/exercicio9', [ExercicioController::class, 'showExercicio9'])->name('exercicio9.show');

Route::post('/exercicio9', [ExercicioController::class, 'handleExercicio9'])->name('exercicio9.handle');

// ex10
Route::get('/exercicio10', [ExercicioController::class, 'showExercicio10'])->name('exercicio10.show');

Route::post('/exercicio10', [ExercicioController::class, 'handleExercicio10'])->name('exercicio10.handle');

// ex11
Route::get('/exercicio11', [ExercicioController::class, 'showExercicio11'])->name('exercicio11.show');

Route::post('/exercicio11', [ExercicioController::class, 'handleExercicio11'])->name('exercicio11.handle');

// ex12
Route::get('/exercicio12', [ExercicioController::class, 'showExercicio12'])->name('exercicio12.show');

Route::post('/exercicio12', [ExercicioController::class, 'handleExercicio12'])->name('exercicio12.handle');

// ex13
Route::get('/exercicio13', [ExercicioController::class, 'showExercicio13'])->name('exercicio13.show');

Route::post('/exercicio13', [ExercicioController::class, 'handleExercicio13'])->name('exercicio13.handle');

// ex14
Route::get('/exercicio14', [ExercicioController::class, 'showExercicio14'])->name('exercicio14.show');

Route::post('/exercicio14', [ExercicioController::class, 'handleExercicio14'])->name('exercicio14.handle');

// ex15
Route::get('/exercicio15', [ExercicioController::class, 'showExercicio15'])->name('exercicio15.show');

Route::post('/exercicio15', [ExercicioController::class, 'handleExercicio15'])->name('exercicio15.handle');

// ex16
Route::get('/exercicio16', [ExercicioController::class, 'showExercicio16'])->name('exercicio16.show');

Route::post('/exercicio16', [ExercicioController::class, 'handleExercicio16'])->name('exercicio16.handle');


// ex17
Route::get('/exercicio17', [ExercicioController::class, 'showExercicio17'])->name('exercicio17.show');

Route::post('/exercicio17', [ExercicioController::class, 'handleExercicio17'])->name('exercicio17.handle');

// ex18
Route::get('/exercicio18', [ExercicioController::class, 'showExercicio18'])->name('exercicio18.show');

Route::post('/exercicio18', [ExercicioController::class, 'handleExercicio18'])->name('exercicio18.handle'); 

// ex19
Route::get('/exercicio19', [ExercicioController::class, 'showExercicio19'])->name('exercicio19.show');

Route::post('/exercicio19', [ExercicioController::class, 'handleExercicio19'])->name('exercicio19.handle');

// ex20
Route::get('/exercicio20', [ExercicioController::class, 'showExercicio20'])->name('exercicio20.show');

Route::post('/exercicio20', [ExercicioController::class, 'handleExercicio20'])->name('exercicio20.handle');

Route::get('/', function () {
    return view('welcome');
});