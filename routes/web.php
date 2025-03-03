<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormProcessor;
use App\Http\Controllers\TestController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/hallo_form', [FormProcessor::class, 'index']);
Route::post('/store_form', [FormProcessor::class, 'store']);
Route::get('/test', [TestController::class, 'index']);