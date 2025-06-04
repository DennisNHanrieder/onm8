<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SubscriberController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name?}', [HelloController::class, 'hello']);

Route::get('/task', [TaskController::class, 'create']);
Route::post('/task', [TaskController::class, 'store']);

use App\Http\Controllers\FormController;

Route::get('/form', [FormController::class, 'show'])->name('form.show');
Route::post('/form', [FormController::class, 'submit'])->name('form.submit');

Route::resource('subscribers', SubscriberController::class)->except(['show']);



