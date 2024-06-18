<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniversityController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/show/students/all',[UniversityController::class,'showAllStudent']);
Route::get('/show/student/{studid}',[UniversityController::class,'showStudent']);
Route::get('/show/colleges',[UniversityController::class,'showAllCollege']);
Route::get('/show/college/{collid}',[UniversityController::class,'showCollege']);
Route::get('/show/departments',[UniversityController::class,'showAllDepartment']);