<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\EkstraController;
use App\Http\Controllers\PplgController;
use App\Models\Pplg;
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

Route::get('/students/all', [StudentsController::class, 'indew']);

Route::get('/students/detail/{student}', [StudentsController::class, 'show']);

Route::get('/Ekstra/ekstra', [EkstraController::class, 'index']);

Route::get('/Ekstra/ekstraDetail/{ekstra}', [EkstraController::class, 'show']);

Route::get('/Pplg/pplg', [PplgController::class, 'index']);

Route::get('/Pplg/pplgDetail/{pplg}', [PplgController::class, 'show']);

Route::get('/Pplg/create', [PplgController::class, 'create']);

Route::post('/Pplg/store', [PplgController::class, 'store']); //buat post request

//Route::delete('/students/delete/{student}', [StudentsController::class, 'destroy']);

//Route::get('/students/{student}/edit', [StudentsController::class, 'edit']);

//Route::put('/students/{student}', [StudentsController::class, 'update']);