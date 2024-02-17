<?php

use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentsController;
use App\Models\Students;
use App\Models\Eskul;
use App\Models\Kelas;
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

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "student",
        "nama" => "Vania",
        "kelas" => "11 PPLG 1",
        "foto" => "img/pasfoto.jpeg"
    ]);
});

Route::get('/student', [ StudentsController::class, 'index']);

Route::get('/student/detail/{student}',[StudentsController::class, 'show']); 
Route::get('/student/create',[StudentsController::class, 'create']);
Route::post('/student/add',[StudentsController::class, 'store']);  
Route::delete('/student/delete/{students}', [StudentsController::class, 'destroy']);
Route::get('/student/edit/{students}', [StudentsController::class, 'edit']);
Route::post('/student/update/{students}',[StudentsController::class, 'update']);

Route::get('/class/kelas', [KelasController::class, 'index3']);
Route::get('/class/create',[KelasController::class, 'create']);
Route::post('/class/add',[KelasController::class, 'store']);  
Route::delete('/class/delete/{classes}',[KelasController::class, 'destroy']);  
Route::get('/class/edit/{classes}', [KelasController::class, 'edit']);
Route::post('/class/submit/{classes}',[KelasController::class, 'update']);

Route::get('/extracurricular', [
    ExtracurricularController::class, 'index1']);

    Route::group(["prefix" => "/join"], function (){
        Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');;
        Route::post('/login', [LoginController::class, 'auth']);
        Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
        Route::post('/register', [RegisterController::class, 'store']);
        // Route::get('/logout', [LogoutController::class, 'logout'])->middleware('auth');
    });