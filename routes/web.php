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
Route::get('/', function () {
    return view('home', [
        'name' => 'Иван',
        'age' => 30,
        'position' => 'Разработчик',
        'address' => 'Москва, ул. Ленина, д. 1'
    ]);
});

Route::get('/contacts', function () {
    return view('contacts', [
        'address' => 'Москва, ул. Пушкина, д. 10',
        'post_code' => '123456',
        'email' => 'example@example.com',
        'phone' => '+7 (123) 456-78-90'
    ]);
});