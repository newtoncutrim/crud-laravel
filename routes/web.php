<?php

<<<<<<< HEAD
use App\Http\Controllers\TesteController;
=======
use App\Http\Controllers\PostController;
>>>>>>> origin/main
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
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/a', [TesteController::class, 'teste']);
=======
Route::get('/criar', [PostController::class, 'create']);
Route::get('/listone', [PostController::class, 'show']);

Route::get('/listall', [PostController::class, 'store']);

Route::get('/editar', [PostController::class, 'update']);

Route::get('/apagar', [PostController::class, 'destroy']);
>>>>>>> origin/main
