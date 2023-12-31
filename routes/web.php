<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\EkstraController;

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('home', [
        "title" => "home page"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about page",
        "nama" => "Calista",
        "kelas" => "11 pplg 2",
        "foto" => "images/sho.jpg"
    ]);
});

/// student pages
Route::get('/students/all', [StudentsController::class, 'index']);

Route::get('/students/detail/{student}', [StudentsController::class, 'show']);

Route::get('/students/create', [StudentsController::class, 'create']);

Route::post('/students/store', [StudentsController::class, 'store']); //buat post request

Route::delete('/students/delete/{student}', [StudentsController::class, 'destroy']);

Route::get('/students/{student}/edit', [StudentsController::class, 'edit']);

Route::put('/students/{student}', [StudentsController::class, 'update']);

/// ekstra pagess
Route::get('/Ekstra/ekstra', [EkstraController::class, 'index']);

Route::get('/Ekstra/ekstraDetail/{ekstra}', [EkstraController::class, 'show']);

