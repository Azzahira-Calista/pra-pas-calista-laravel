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

Route::get('/students/all', [StudentsController::class, 'indew']);

Route::get('/students/detail/{student}', [StudentsController::class, 'show']);

Route::get('/Ekstra/ekstra', [EkstraController::class, 'index']);

Route::get('/Ekstra/ekstraDetail/{ekstra}', [EkstraController::class, 'show']);
