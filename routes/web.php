<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\BrokerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertiesController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\BidController;


Route::get('/', HomeController::class)->name('home');

Route::get('/reservation', function () {
    return view('dashboard');
})
    ->middleware(['auth','verified'])
    ->name('dashboard');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/houses', function () {
    return view('home');
})->name('houses');

Route::get('/contact', function () {
    return view('home');
})->name('contact');

Route::get('/about', function () {
    return view('home');
})->name('about');




Route::resource('properties', PropertiesController::class)
    ->middleware(['auth','verified']);

Route::resource('agents', AgentController::class)
    ->middleware(['auth','verified']);

Route::resource('brokers', BrokerController::class)
    ->middleware(['auth','verified']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
