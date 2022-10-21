<?php

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

use App\Http\Controllers\StudentController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ProfessorController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'index']);

Route::get('/movies', [MovieController::class, 'index']);

Route::get('/subjects', [SubjectController::class, 'index']);
Route::get('/subjects/{id}', [SubjectController::class, 'allstudents']);

Route::get('/professors', [ProfessorController::class, 'index']);
Route::get('/professors/create', [ProfessorController::class, 'create']);
Route::post('/professors/create', [ProfessorController::class, 'store']);

