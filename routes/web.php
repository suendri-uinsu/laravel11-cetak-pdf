<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cetakpdf', [App\Http\Controllers\StudentController::class, 'index']);
